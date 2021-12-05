<?php
    //  arquivo que vai receber as requisições do usuário na página index.php e interagir com as classes do programa 
    include "database.php";
    include "pessoa.php";

    $database = new Database();

    $action = $_POST['action']; // ação que será executada - cadastrar, editar ou deletar

    //  caso ele receba as variáveis post nome, sexo e dataNasc, coloca-as em um objeto do tipo Pessoa
    if (isset($_POST['nome']) && isset($_POST['sexo']) && isset($_POST['dataNasc'])){
        $nome = $_POST['nome'];
        $sexo = $_POST['sexo'];
        $dataNasc = $_POST['dataNasc'];
        $tel = $_POST['tel'];
        settype($tel, "int");
        $email = $_POST['email'];

        $novaPessoa = new Pessoa($nome, $sexo, $dataNasc, $tel, $email);
        
        //  executa as funções para cadastrar ou editar pessoa no banco de dados a depender da ação que foi passada
        if ($action == 'cadastrar'){
            $database->addPessoa($novaPessoa);
        }elseif($action == 'editar'){
            $id = $_POST['idpessoa'];
            $database->changePessoa($id, $novaPessoa);
        }
    }

    //  exclui uma pessoa do banco de dados caso a ação passada seja 'excluir'
    if($action == 'excluir'){
        $id = $_POST['idpessoa'];
        $database->delPessoa($id);        
    }
    
    header("Location: index.php");
