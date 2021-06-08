<?php

abstract class Pessoa
{
    private $nome, $sexo, $idade;
    
    function __construct($nome, $sexo, $idade)
    {
        $this->nome = $nome;
        $this->sexo = $sexo;
        $this->idade = $idade;
    }

    final function fazerAniversario()
    {
        setIdade(getIdade() + 1);

    }

    // Métodos Especiais

    function getNome()
    {
        return $this->nome;
    }
    function setNome($value)
    {
        $this->nome = $value;
    }
    function getSexo()
    {
        return $this->sexo;
    }
    function setSexo($value)
    {
        $this->sexo = $value;
    }
    function getIdade()
    {
        return $this->idade;
    }
    function setIdade($value)
    {
        $this->idade = $value;
    }
}
