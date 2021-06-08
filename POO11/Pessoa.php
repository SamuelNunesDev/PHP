<?php

abstract class Pessoa
{
    protected $nome, $idade, $sexo, $experiencia;

    protected abstract function ganharExp();

    // Métodos especiais

    function __construct($nome, $idade, $sexo)
    {
        $this->setNome($nome);
        $this->setIdade($idade);
        $this->setSexo($sexo);
        $this->setExperiencia(1);
    }
    function getNome()
    {
        return $this->nome;
    }
    function setNome($value)
    {
        $this->nome = $value;
    }
    function getIdade()
    {
        return $this->idade;
    }
    function setIdade($value)
    {
        $this->idade = $value;
    }
    function getSexo()
    {
        return $this->sexo;
    }
    function setSexo($value)
    {
        $this->sexo = $value;
    }
    function getExperiencia()
    {
        return $this->experiencia;
    }
    function setExperiencia($value)
    {
        $this->experiencia = $value;
    }
}