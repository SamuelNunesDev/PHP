<?php

require_once "Controlador.php";
class ControleRemoto implements Controlador {

    // Atributos
    private $volume, $tocando, $ligado;

    // Métodos Especiais
    public function __construct(){
        $this->setvolume(50);
        $this->settocando(false);
        $this->setligado(false);
    }
    private function getvolume(){
        return $this->volume;
    }
    private function gettocando(){
        return $this->tocando;
    }
    private function getligado(){
        return $this->ligado;
    }
    private function setvolume($value){
        $this->volume += ($value);
    }
    private function settocando($value){
        $this->tocando = $value;
    }
    private function setligado($value){
        $this->ligado = $value;
    }

    // Métodos funcionais
    public function ligar(){
        $this->setligado(true);
    }
    public function desligar(){
        $this->setligado(false);
    }
    public function abrirMenu(){
        echo "<br/>Está ligado? ".($this->gettocando()?"Sim":"Não");
        echo "<br/>Está tocando? ".($this->gettocando()?"Sim":"Não");
        echo "<br/>Volume: ".$this->getvolume()."<br/>";
        for ($c=0;$c<$this->getvolume();$c++){
            echo "|";
        }
    }
    public function fecharMenu(){
        echo "<br/>Fechando menu...";
    }
    public function maisVolume(){
        if ($this->getligado()){
            $this->setvolume(10);
        }
    }
    public function menosVolume(){
        if ($this->getligado()){
            $this->setvolume(-10);
        }
    }
    public function ligarMudo(){
        if ($this->getligado() && $this->getvolume() > 0){
            $this->setvolume(0);
        }
    }
    public function desligarMudo(){
        if ($this->getligado() && $this->getvolume() == 0){
            $this->setvolume(50);
        }
    }
    public function play(){
        if ($this->getligado() && !($this->gettocando())){
            $this->settocando(true);
        }
    }
    public function pause(){
        if ($this->getligado() && $this->gettocando()){
            $this->settocando(false);
        }
    }
}
