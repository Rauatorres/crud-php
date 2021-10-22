<?php

class Database{

    private $db;

    public function __construct()    {
        try{
            $this->db = new PDO("mysql:host=localhost;dbname=CRUD-PHP", "root", "123");
            $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $this->db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
        }catch (PDOException $e){
            echo "Erro - $e";
        }
    }

    public function getPessoas(){
        $select = $this->db->prepare("SELECT * FROM PESSOA");
        $select->execute();
        $select->setFetchMode(PDO::FETCH_ASSOC);
        $res = $select->fetchAll();
        return $res;
    }

    public function addPessoa($pessoa){
        $insert = $this->db->prepare("INSERT INTO PESSOA VALUES
        (DEFAULT, :nome, :sexo, :datanasc, :tel, :email)");
        $insert->bindParam(':nome', $pessoa->getNome());
        $insert->bindParam(':sexo', $pessoa->getSexo());
        $insert->bindParam(':datanasc', $pessoa->getDataNasc());
        $insert->bindParam(':tel', $pessoa->getTel());
        $insert->bindParam(':email', $pessoa->getEmail());
        $insert->execute();
    }

    public function delPessoa($id){
        $delete = $this->db->prepare("DELETE FROM PESSOA WHERE ID = :id");
        $delete->bindParam(':id', $id);
        $delete->execute();
    }

    public function changePessoa($id, $pessoa){
        $update = $this->db->prepare("UPDATE PESSOA 
        SET NOME = :nome, SEXO = :sexo, DATA_NASC = :datanasc, TEL = :tel, EMAIL = :email
        WHERE ID = :id");
        $update->bindParam(':id', $id);
        $update->bindParam(':nome', $pessoa->getNome());
        $update->bindParam(':sexo', $pessoa->getSexo());
        $update->bindParam(':datanasc', $pessoa->getDataNasc());
        $update->bindParam(':tel', $pessoa->getTel());
        $update->bindParam(':email', $pessoa->getEmail());
        $update->execute();
    }
    
}
?>