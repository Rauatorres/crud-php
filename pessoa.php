<?php

class Pessoa{
    private $nome;
    private $sexo;
    private $data_nasc;
    private $tel;
    private $email;

    function __construct($nome, $sexo, $data_nasc, $tel, $email){
        $this->nome = $nome;
        $this->sexo = $sexo;
        $this->data_nasc = $data_nasc;
        $this->tel = $tel;
        $this->email = $email;
    }

    function getNome(){
        return $this->nome;
    }
    function getSexo(){
        return $this->sexo;
    }
    function getDataNasc(){
        return $this->data_nasc;
    }
    function getTel(){
        return $this->tel;
    }
    function getEmail(){
        return $this->email;
    }
}