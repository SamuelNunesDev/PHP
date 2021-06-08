<?php

require_once 'Animal.php';

class Ave extends Animal
{
    private $corPena;

    function locomover()
    {
        echo "<p>Voando</p>";
    }
    function alimentar()
    {
        echo "<p>Sementes</p>";
    }
    function emitirSom()
    {
        echo "<p>Assoviar</p>";
    }
    function fazerNinho()
    {
        echo "<p>Fez um ninho</p>";
    }
    
    // Métodos especiais

    function __construct($peso, $idade, $membros, $corPena)
    {
        Animal::__construct($peso, $idade, $membros);
        $this->corPena = $corPena;
    }
    function getCorPena()
    {
        return $this->corPena;
    }
    function setCorPena($value)
    {
        $this->corPena = $value;
    }
}
