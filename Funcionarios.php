<?php

require_once 'Funcionario.php';

class Funcionarios extends Funcionario
{
    private $setor, $trabalhando;

    function __construct($nome, $idade, $sexo, $setor, $trabalhando)
    {
        $this->setNome($nome);
        $this->setIdade($idade);
        $this->setSexo($sexo);
        $this->setSetor($setor);
        $this->setTrabalhando($trabalhando);
    }

    function mudarTrabalho($value)
    {
        $this->setSetor($value);
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