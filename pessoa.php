<?php

class Pessoa{
    private $nome;
    private $sexo;
    private $dataNasc;
    private $tel;
    private $email;

    public function __construct($nome, $sexo, $dataNasc, $tel, $email){
        $this->nome = $nome;
        $this->sexo = $sexo;
        $this->dataNasc = $dataNasc;
        $this->tel = $tel;
        $this->email = $email;
    }

    public function getNome(){
        return $this->nome;
    }
    public function getSexo(){
        return $this->sexo;
    }
    public function getDataNasc(){
        return $this->dataNasc;
    }
    public function getTel(){
        return $this->tel;
    }
    public function getEmail(){
        return $this->email;
    }
}
