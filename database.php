<?php

class Database{

    public function __construct()    {
        try{
            $db = new PDO("mysql:host=localhost;dbname=CRUD-PHP", "root", "123");
            $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            echo "Sucesso";
        }catch (PDOException $e){
            echo "Erro - $e";
        }
    }

    public function getPessoas(){

    }

    public function addPessoa(){

    }

    public function delPessoa(){

    }

    public function changePessoa(){

    }
    
}