<?php
    include "database.php";
    include "pessoa.php";
    $database = new Database();
    if (isset($_POST['nome']) && isset($_POST['sexo']) && isset($_POST['dataNasc'])){
        $nome = $_POST['nome'];
        $sexo = $_POST['sexo'];
        $dataNasc = $_POST['dataNasc'];
        if (isset($_POST['tel'])){
             $tel = $_POST['tel'];
             echo $tel;
        }
        // $tel = $_POST['tel'];
        // $email = $_POST['email'];
        $novaPessoa = new Pessoa($nome, $sexo, $dataNasc, null, null);
        $database->addPessoa($novaPessoa);
    }
    header("index.php");
