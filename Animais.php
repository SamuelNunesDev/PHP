<?php

abstract class Animal
{
    protected $peso, $idade, $membros;

    abstract function emitirSom();
    
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
        return $this->peso;
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

class Mamifero extends Animal
{
    protected $corPele;

    function emitirSom()
    {
        echo "<p>Som de mamifero</p>";
    }

    // Métodos especiais

    function __construct($peso, $idade, $membros, $corPele)
    {
        $this->setPeso($peso);
        $this->setIdade($idade);
        $this->setMembros($membros);
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

class Lobo extends Mamifero
{
    function emitirSom()
    {
        echo "<p>Auuuuuuuuuuu</p>";
    }
}

class Cachorro extends Lobo
{
    function emitirSom()
    {
        echo "<p>Au au au</p>";
    }
    function reagirFrase($frase)
    {
        if ($frase == 'toma comida' || $frase == 'Olá')
        {
            echo "<p>Abanar e latir</p>";
        }
        else
        {
            echo "<p>Rosnar</p>";
        }
    }
    function reagirHora($hora)
    {
        if ($hora < 12)
        {
            echo "<p>Abanar</p>";
        }
        elseif ($hora <= 18)
        {
            echo "<p>Ignorar</p>";
        }
        else
        {
            echo "<p>Abanar e latir</p>";
        }
    }
    function reagirDono($dono)
    {
        if($dono)
        {
            echo "<p>Abanar e latir</p>";
        }
        else
        {
            echo "<p>Rosnar</p>";
        }
    }
    function reagirIdadePeso($idade, $peso)
    {
        if ($idade < 5)
        {
            if ($peso < 10)
            {
                echo "<p>Abanar</p>";
            }
            else
            {
                echo "<p>Latir</p>";
            }
        }
        else
        {
            if ($peso < 10)
            {
                echo "<p>Rosnar</p>";
            }
            else
            {
                echo "<p>Ignorar</p>";
            }
        }
    }
}
