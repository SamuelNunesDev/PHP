<?php

require_once "Publicacao.php";
require_once "Pessoa.php";

class Livro implements Publicacao {

    // Atributos

    private $titulo, $autor, $totPaginas, $pagAtual, $aberto, $leitor;

    // Métodos especiais

    function __construct($titulo, $autor, $total_paginas, $leitor){
        $this->setTitulo($titulo);
        $this->setAutor($autor);
        $this->setTotPaginas($total_paginas);
        $this->setLeitor($leitor->getNome());
        $this->setPagAtual(0);
        $this->setAberto(false);
    }
    function getTitulo(){
        return $this->titulo;
    }
    function getAutor(){
        return $this->autor;
    }
    function getTotPaginas(){
        return $this->totPaginas;
    }
    function getPagAtual(){
        return $this->pagAtual;
    }
    function getAberto(){
        return $this->aberto;
    }
    function getLeitor(){
        return $this->leitor;
    }
    function setTitulo($value){
        $this->titulo = $value;
    }
    function setAutor($value){
        $this->autor = $value;
    }
    function setTotPaginas($value){
        $this->totPaginas = $value;
    }
    function setPagAtual($value){
        $this->pagAtual = $value;
    }
    function setAberto($value){
        $this->aberto = $value;
    }
    function setLeitor($value){
        $this->leitor = $value;
    }

    // Métodos

    function detalhes(){
        echo "<br/>O livro ".$this->getTitulo()." escrito por ".$this->getAutor()." tem um total de "
            .$this->getTotPaginas()." paginas e está sendo lido por ".$this->getLeitor();
    }
    function abrir(){
        if (!$this->getAberto()) {
            $this->setAberto(true);
            echo "<br/>Livro " . $this->getTitulo() . " aberto com sucesso!";
        }
        else{
            echo "<br/>O livro ".$this->getTitulo()." já está aberto!";
        }
    }
    function fechar(){
        if ($this->getAberto()) {
            $this->setAberto(false);
            echo "<br/>Livro " . $this->getTitulo() . " fechado com sucesso!";
        }
        else{
            echo "<br/>O livro ".$this->getTitulo()." já está fechado!";
        }
    }
    function folhear($value){
        if ($this->getPagAtual() + $value <= $this->getTotPaginas() && $this->getAberto()) {
            $this->setPagAtual($this->getPagAtual() + $value);
            echo "<br/>Livro ".$this->getTitulo()." foi folheado em $value páginas";
        }
        else{
            echo "<br/>Não é possível folhear esta quantidade de paginas.";
        }
    }

    function avancarPag(){
        if (($this->getPagAtual() + 1) <= $this->getTotPaginas() && $this->getAberto()){
            $this->setPagAtual($this->getPagAtual() + 1);
            echo "<br/>Foi avançada uma página no livro ".$this->getTitulo();
        }
        else{
            echo "<br/>Não foi possível avançar uma página!";
        }
    }

    function voltarPag()
    {
        if (($this->getPagAtual() - 1) >= 1 && $this->getAberto()){
            $this->setPagAtual($this->getPagAtual() -1);
            echo "<br/>Voce voltou uma página no livro ".$this->getTitulo();
        }
        else{
            echo "<br/>Não foi possível voltar uma página!";
        }
    }
}
