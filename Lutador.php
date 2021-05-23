<?php


class Lutador{

    //Atributos
    private $nome, $nacionalidade, $idade, $altura, $peso, $categoria, $vitorias, $derrotas, $empates;

    //Métodos especiais
    function __construct($nome, $nacionalidade, $idade, $altura, $peso, $vitorias, $derrotas, $empates) {
        $this->setnome($nome);
        $this->setnacionalidade($nacionalidade);
        $this->setidade($idade);
        $this->setaltura($altura);
        $this->setpeso($peso);
        $this->setvitorias($vitorias);
        $this->setderrotas($derrotas);
        $this->setempates($empates);
    }
    public function getnome(){
        return $this->nome;
    }
    public function setnome($value){
        $this->nome = $value;
    }
    public function getnacionalidade(){
        return $this->nacionalidade;
    }
    public function setnacionalidade($value){
        $this->nacionalidade = $value;
    }
    public function getidade(){
        return $this->idade;
    }
    public function setidade($value){
        $this->idade = $value;
    }
    public function getaltura(){
        return $this->altura;
    }
    public function setaltura($value){
        $this->altura = $value;
    }
    public function getpeso(){
        return $this->peso;
    }
    public function setpeso($value){
        $this->peso = $value;
    }
    private function getvitorias(){
        return $this->vitorias;
    }
    public function setvitorias($value){
        $this->vitorias = $value;
    }
    private function getderrotas(){
        return $this->derrotas;
    }
    public function setderrotas($value){
        $this->derrotas = $value;
    }
    private function getempates(){
        return $this->empates;
    }
    public function setempates($value){
        $this->empates = $value;
    }
    public function getcategoria(){
        $this->setcategoria($this->getpeso());
        return $this->categoria;
    }
    private function setcategoria($value){
        if ($value < 52.2 || $value > 120.2){
            echo "<br/>Peso inválido!";
        }
        elseif ($value <= 70.3){
            $this->categoria = "Leve";
        }
        elseif ($value <= 83.9){
            $this->categoria = "Médio";
        }
        else{
            $this->categoria = "Pesado";
        }
    }

    //Métodos

    public function ganharLuta(){
        $this->setvitorias($this->getvitorias()+1);
    }
    public function perderLuta(){
        $this->setderrotas($this->getderrotas()+1);
    }
    public function empatarLuta(){
        $this->setempates($this->getempates()+1);
    }
    public function apresentar(){
        echo "<br/>Lutador: ".$this->getnome();
        echo "<br/>Origem: ".$this->getnacionalidade();
        echo "<br/>".$this->getidade()." anos";
        echo "<br/>".$this->getaltura()."m de altura";
        echo "<br/>Pesando ".$this->getpeso()."Kg";
        echo "<br/>Ganhou ".$this->getvitorias()." lutas até o momento.";
        echo "<br/>Perdeu ".$this->getderrotas()." lutas até o momento.";
        echo "<br/>Empatou ".$this->getempates()." lutas até o momento.";
    }
    public function status(){
        printf("<br/>%s é um peso %s com um total de %d vitorias, %d derrotas e %d empates até o momento.",
                $this->getnome(), $this->getcategoria(), $this->getvitorias(), $this->getderrotas(),
                $this->getempates());
    }
}
