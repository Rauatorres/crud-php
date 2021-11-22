<?php
    include "database.php";
    include "pessoa.php";

    $database = new Database();

    $action = $_POST['action'];

    if (isset($_POST['nome']) && isset($_POST['sexo']) && isset($_POST['dataNasc'])){
        // echo isset($_POST['action']);
        // echo $_POST['nome'];
        $nome = $_POST['nome'];
        $sexo = $_POST['sexo'];
        $dataNasc = $_POST['dataNasc'];
        $tel = $_POST['tel'];
        settype($tel, "int");
        $email = $_POST['email'];

        $novaPessoa = new Pessoa($nome, $sexo, $dataNasc, $tel, $email);
        
        if ($action == 'cadastrar'){
            $database->addPessoa($novaPessoa);
        }elseif($action == 'editar'){
            $id = $_POST['idpessoa'];
            $database->changePessoa($id, $novaPessoa);
        }
    }
    
    header("Location: index.php");
