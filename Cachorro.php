<?php

require_once 'Mamifero.php';

class Cachorro extends Mamifero
{
    function enterrarOsso()
    {
        echo "<p>Enterrando osso</p>";
    }
    function abanarRabo()
    {
        echo "<p>Abanando rabo</p>";
    }
    function emitirSom()
    {
        echo "<p>Au au au</p>";
    }
}