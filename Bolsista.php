<?php

require_once 'Alunos.php';

class Bolsista extends Aluno
{
    private $bolsa;

    function __construct($nome, $idade, $sexo, $matricula, $curso, $bolsa)
    {
        $this->setNome($nome);
        $this->setIdade($idade);
        $this->setSexo($sexo);
        $this->setMatricula($matricula);
        $this->setCurso($curso);
        $this->bolsa = $bolsa;
    }

    function renovarBolsa($value)
    {
        $this->setBolsa($this->getBolsa + $value);
    }

    // Métodos Especiais

    function getBolsa()
    {
        return $this->bolsa;
    }
    function setBolsa($value)
    {
        $this->bolsa = $value;
    }
}

?>