<?php

abstract class Animal
{
    protected $peso, $idade, $membros;

    abstract function locomover();
    abstract function alimentar();
    abstract function emitirSom();

    function __construct($peso, $idade, $membros)
    {
        $this->peso = $peso;
        $this->idade = $idade;
        $this->membros = $membros;
    }
    function getPeso()
    {
        return $this->peso;
    }
    function setPeso($value)
    {
        $this->peso = $value;
    }
    function getIdade()
    {
        return $this->idade;
    }
    function setIdade($value)
    {
        $this->idade = $value;
    }
    function getMembros()
    {
        return $this->membros;
    }
    function setMembros($value)
    {
        $this->membros = $value;
    }
}
