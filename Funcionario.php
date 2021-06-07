<?php


class Funcionario
{
    private $nome, $idade, $sexo;

    function fazerAniver()
    {
        $this->setIdade($this->getIdade() + 1);
    }

    //Métodos especiais

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
}
