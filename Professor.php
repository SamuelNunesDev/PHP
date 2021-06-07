<?php

require_once 'Funcionario.php';

class Professor extends Funcionario
{
    private $especialidade, $salario;

    function __construct($nome, $idade, $sexo, $especialidade, $salario)
    {
        $this->setNome($nome);
        $this->setidade($idade);
        $this->setSexo($sexo);
        $this->setEspecialidade($especialidade);
        $this->setSalario($salario);
    }

    function receberAumento($value)
    {
        $this->setSalario($this->getSalario() + $value);
    }

    // Métodos especiais

    function getNome()
    {
        return $this->nome;
    }
    function setNome($value)
    {
        $this->nome = $value;
    }
    function getIdade()
    {
        return $this->idade;
    }
    function setIdade($value)
    {
        $this->idade = $value;
    }
    function getSexo()
    {
        return $this->sexo;
    }
    function setSexo($value)
    {
        $this->sexo = $value;
    }
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