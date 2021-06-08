<?php

require_once 'Animal.php';

class Mamifero extends Animal
{
    private $corPele;

    function locomover()
    {
        echo "<p>Correndo</p>";
    }
    function alimentar()
    {
        echo "<p>Mamando</p>";
    }
    function emitirSom()
    {
        echo "<p>Som de mamifero</p>";
    }

    // Métodos Especiais

    function __construct($peso, $idade, $membros, $corPele)
    {
        Animal::__construct($peso, $idade, $membros);
        $this->corPele = $corPele;
    }
    function getCorPele()
    {
        return $this->corPele;
    }
    function setCorPele($value)
    {
        $this->corPele = $value;
    }

}