<?php

require_once 'Alunos.php';

class Tecnico extends Aluno
{
    private $registroProfissional;

    function __construct($nome, $idade, $sexo, $matricula, $curso, $registroProfissional)
    {
        Aluno::__construct($nome, $idade, $sexo, $matricula, $curso);
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