<?php

require_once 'Alunos.php';

class Tecnico extends Aluno
{
    private $registroProfissional;

    function __construct($nome, $idade, $sexo, $matricula, $curso, $registroProfissional)
    {
        $this->setNome($nome);
        $this->setIdade($idade);
        $this->setSexo($sexo);
        $this->setMatricula($matricula);
        $this->setCurso($curso);
        $this->registroProfissional = $registroProfissional;
    }

    // Métodos Especiais

    function getRegistroProfissional()
    {
        return $this->registroProfissional;
    }
    function setRegistroProfissional($value)
    {
        $this->registroProfissional = $value;
    }
}