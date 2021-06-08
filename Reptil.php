<?php

require_once 'Animal.php';

class Reptil extends Animal
{
    private $corEscama;

    function locomover()
    {
        echo "<p>Rastejando</p>";
    }
    function alimentar()
    {
        echo "<p>Vegetais</p>";
    }
    function emitirSom()
    {
        echo "<p>Som de Réptil</p>";
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