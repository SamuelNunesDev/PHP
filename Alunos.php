<?php

require_once 'People.php';

class Aluno extends Pessoa
{
    private $matricula, $curso;
    
    function __construct($nome, $idade, $sexo, $matricula, $curso)
    {
        $this->setNome($nome);
        $this->setIdade($idade);
        $this->setSexo($sexo);
        $this->matricula = $matricula;
        $this->curso = $curso;
    }

    //Métodos especiais

    function getMatricula()
    {
        return $this->matricula;
    }
    function setMatricula($value)
    {
        $this->matricula = $value;
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

?>