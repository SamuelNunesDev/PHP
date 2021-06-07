<?php

require_once 'Funcionario.php';

class Professor extends Funcionario
{
    private $especialidade, $salario;

    function receberAumento($value)
    {
        $this->setSalario($this->getSalario() + $value);
    }

    // Métodos especiais

    function getEspecialidade()
    {
        return $this->especialidade;
    }
    function setEspecialidade($value)
    {
        $this->especialidade = $value;
    }
    function getSalario()
    {
        return $this->salario;
    }
    function setSalario($value)
    {
        $this->salario = $value;
    }
}