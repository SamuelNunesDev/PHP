<?php

require_once 'Animal.php';

class Peixe extends Animal
{
    private $corEscama;

    function locomover()
    {
        echo "<p>Nadando</p>";
    }
    function alimentar()
    {
        echo "<p>Plantas do mar</p>";
    }
    function emitirSom()
    {
        echo "<p>Som de peixe</p>";
    }
    function soltarBolha()
    {
        echo "<p>Soltou uma bolha!</p>";
    }

    // Métodos Especiais

    function __construct($peso, $idade, $membros, $corEscama)
    {
        Animal::__construct($peso, $idade, $membros);
        $this->corEscama = $corEscama;
    }
    function getCorEscama()
    {
        return $this->corEscama;
    }
    function setCorEscama($value)
    {
        $this->corEscama = $value;
    }
}