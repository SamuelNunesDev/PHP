<?php

require_once 'Gafanhotos.php';
require_once 'Video.php';

class Visualizacao
{
    private $espectador, $filme;

    function avaliar()
    {
        echo "<p>O filme ".$this->filme->getTitulo()."  recebeu a nota 5!</p>";
        $this->filme->setAvaliacao(5);
        echo "<p>Avaliação total: ".$this->filme->getAvaliacao()."</p>";
    }
    function avaliarNota($value)
    {
        echo "<p>O filme ".$this->filme->getTitulo()."  recebeu a nota $value!</p>";
        $this->filme->setAvaliacao($value);
        echo "<p>Avaliação total: ".$this->filme->getAvaliacao()."</p>";
    }
    function avaliarPorc($value)
    {
        if($value <= 30)
        {
            $nota = 3;
        }
        elseif($value <= 60)
        {
            $nota = 5;
        }
        elseif($value <=99)
        {
            $nota = 7;
        }
        else
        {
            $nota = 10;
        }
        echo "<p>O filme ".$this->filme->getTitulo()."  recebeu a nota $nota!</p>";
        $this->filme->setAvaliacao($nota);
        echo "<p>Avaliação total: ".$this->filme->getAvaliacao()."</p>";
    }

    // Métodos especiais

    function __construct($espectador, $filme)
    {   
        $this->setEspectador($espectador);
        $this->setFilme($filme);
        $this->filme->Assistiram();
        $this->espectador->viuMaisUm();
        $this->espectador->ganharExp();
    }
    function getEspectador()
    {
        return $this->espectador;
    }
    function setEspectador($value)
    {
        $this->espectador = $value;
    }
    function getFilme()
    {
        return $this->filme;
    }
    function setFilme($value)
    {
        $this->filme = $value;
    }
}