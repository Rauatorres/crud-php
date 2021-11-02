<?php
    include "database.php";
    include "pessoa.php";
    $database = new Database();
    if (isset($_POST['nome']) && isset($_POST['sexo']) && isset($_POST['dataNasc'])){
        $nome = $_POST['nome'];
        $sexo = $_POST['sexo'];
        $dataNasc = $_POST['dataNasc'];
        $tel = $_POST['tel'];
        settype($tel, "int");
        $email = $_POST['email'];
        echo $nome." ".gettype($nome)."<br>";
        echo $sexo." ".gettype($sexo)."<br>";
        echo $dataNasc." ".gettype($dataNasc)."<br>";
        echo $tel." ".gettype($tel)."<br>";
        echo $email." ".gettype($email)."<br>";
        $novaPessoa = new Pessoa($nome, $sexo, $dataNasc, $tel, $email);
        $testePessoa = new Pessoa("teste", "T", "13-05-1998", 123456, 'fdsofmpdsk');
        $database->addPessoa($novaPessoa);
    }
    echo "funcionando";
    header("Location: index.php");
