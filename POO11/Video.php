<?php

require_once 'AcoesVideo.php';

class Video implements AcoesVideo
{
    private $titulo, $avaliacao, $views, $curtidas, $reproduzindo, $quantidadeDeAvaliacoes, $somaDeAvaliacoes;

    function play()
    {
        echo "<p>Reproduzindo o vídeo ".$this->getTitulo();
        $this->setReproduzindo(true);
    }
    function pause()
    {
        echo "<p>Video ".$this->getTitulo()."  pausado.";
        $this->setReproduzindo(false);
    }
    function like()
    {
        echo "<p>Video ".$this->getTitulo()."  curtido!";
        $this->setCurtidas($this->setCurtidas() + 1);
    }
    function assistiram()
    {
        echo "<p>O vídeo ".$this->getTitulo()."  foi assistido!";
        $this->setViews($this->getViews() + 1);
    }

    // Métodos especiais

    function __construct($titulo)
    {
        $this->setTitulo($titulo);
        $this->setViews(0);
        $this->setCurtidas(0);
        $this->setReproduzindo(false);
    }
    function getTitulo()
    {
        return $this->titulo;
    }
    function setTitulo($value)
    {
        $this->titulo = $value;
    }
    function getAvaliacao()
    {
        return $this->avaliacao;
    }
    function setAvaliacao($value)
    {
        $this->somaDeAvaliacoes += $value;
        $this->quantidadeDeAvaliacoes++;
        $this->avaliacao = $this->somaDeAvaliacoes / $this->quantidadeDeAvaliacoes;
    }
    function getViews()
    {
        return $this->avaliacao;
    }
    function setViews($value)
    {
        $this->views = $value;
    }
    function getCurtidas()
    {
        return $this->curtidas;
    }
    function setCurtidas($value)
    {
        $this->curtidas = $value;
    }
    function getReproduzindo()
    {
        return $this->reproduzindo;
    }
    function setReproduzindo($value)
    {
        $this->reproduzindo = $value;
    }
}