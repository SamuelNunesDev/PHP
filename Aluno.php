<?php

require_once 'Funcionario.php';

class Aluno extends Funcionario
{
    private $mat, $curso;

    function __construct($nome, $idade, $sexo, $matricula, $curso)
    {
        $this->setMat($matricula);
        $this->setCurso($curso);
        $this->setnome($nome);
        $this->setIdade($idade);
        $this->setSexo($sexo);
    }

    function cadastro($nome, $idade, $sexo)
    {
        $this->setNome($nome);
        $this->setIdade($idade);
        $this->setSexo($sexo);
    }
    function cancelarMat()
    {
        $this->setMat(0);
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
    function getMat()
    {
        return $this->mat;
    }
    function setMat($value)
    {
        $this->mat = $value;
    }
    function getCurso()
    {
        return $this->curso;
    }
    function setCurso($value)
    {
        $this->curso = $value;
    }
}