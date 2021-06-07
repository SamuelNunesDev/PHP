<?php

require_once 'Funcionario.php';

class Funcionarios extends Funcionario
{
    private $setor, $trabalhando;

    function mudarTrabalho($value)
    {
        $this->setSetor($value);
    }

    // Métodos especiais

    function getSetor()
    {
        return $this->setor;
    }
    function setSetor($value)
    {
        $this->setor = $value;
    }
    function getTrabalhando()
    {
        return $this->trabalhando;
    }
    function setTrabalhando($value)
    {
        $this->trabalhando = $value;
    }
}