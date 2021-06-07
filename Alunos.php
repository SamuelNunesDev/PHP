<?php

require_once 'People.php';

class Aluno extends Pessoa
{
    private $matricula, $curso;
    
    function __construct($nome, $idade, $sexo, $matricula, $curso)
    {
        setNome($nome);
        setIdade($idade);
        setSexo($sexo);
        $this->matricula = $matricula;
        $this->curso = $curso;
    }

    //Métodos especiais


}

?>