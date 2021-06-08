<?php

require_once 'People.php';

class Professor extends Pessoa
{
    private $especialidade, $salario;

    function __construct($nome, $idade, $sexo, $especialidade, $salario)
    {
        $this->setNome($nome);
        $this->setIdade($idade);
        $this->setSexo($sexo);
        $this->especialidade = $especialidade;
        $this->salario = $salario;
    }
    function receberAumento($value)
    {
        $this->setSalario($this->getSalario + $value);
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