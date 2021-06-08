<?php

require_once 'Pessoa.php';

class Gafanhoto extends Pessoa
{
    private $login, $totAssistidos;

    function viuMaisUm()
    {
        $this->setTotAssistidos($this->getTotAssistidos() + 1);
        echo "<p>O gafanhoto ".$this->getNome()."  assistiu mais um vídeo!";
    }
    function ganharExp()
    {
        $this->setExperiencia($this->getExperiencia() + 1);
        echo "<p>O gafanhoto ".$this->getNome()."  ganhou +1 ponto de experiencia!";
    }
    
    // Métodos especiais

    function __construct($nome, $idade, $sexo, $login)
    {
        Pessoa::__construct($nome, $idade, $sexo);
        $this->setLogin($login);
        $this->setTotAssistidos(0);
    }
    function getLogin()
    {
        return $this->login;
    }
    function setLogin($value)
    {
        $this->login = $value;
    }
    function getTotAssistidos()
    {
        return $this->totAssistidos;
    }
    function setTotAssistidos($value)
    {
        $this->totAssistidos = $value;
    }
}