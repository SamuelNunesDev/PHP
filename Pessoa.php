<?php


class Pessoa{

    // Atributos

    private $nome, $idade, $sexo;

    // Métodos especiais

    function __construct($nome, $idade, $sexo){
        $this->nome = $nome;
        $this->idade = $idade;
        $this->sexo = $sexo;
    }
    function getNome(){
        return $this->nome;
    }
    function setNome($value){
        $this->nome = $value;
    }
    function getIdade(){
        return $this->idade;
    }
    function setIdade($value){
        $this->idade = $value;
    }
    function getSexo(){
        return $this->sexo;
    }
    function setSexo($value)
    {
        $this->sexo = $value;
    }

    // Métodos

    function fazerAniversario(){
        $this->idade++;
    }
}
