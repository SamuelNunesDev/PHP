<?php

require_once 'Funcionario.php';

class Aluno extends Funcionario
{
    private $mat, $curso;

    function cancelarMat()
    {
        $this->setMat(0);
    }

    // Métodos especiais

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
        $this->curso = $this->curso;
    }
}