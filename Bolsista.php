<?php

require_once 'Alunos.php';

class Bolsista extends Aluno
{
    private $bolsa;

    function __construct($nome, $idade, $sexo, $matricula, $curso, $bolsa)
    {
        Aluno::__construct($nome, $idade, $sexo, $matricula, $curso);
        $this->bolsa = $bolsa;
    }

    function renovarBolsa($value)
    {
        $this->setBolsa($this->getBolsa + $value);
    }
    function pagarMensalidade()
    {
        echo "<p>Mensalidade ALUNO ".$this->getNome()."  paga com desconto bolsista!";
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
