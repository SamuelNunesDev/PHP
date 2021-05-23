<?php


class Caneta{

    public $modelo;
    private $cor;
    protected $carga;
    public $tampada;

    public function __construct($modelo, $cor, $tampada, $carga){
        $this->cor = "Verde";
        $this->tampar();
    }

    private function tampar(){
        $this->tampada = true;
    }

    public function get($atributte){
        return $this->$atributte;
    }
    public function set($atributte, $value){
        $this->$atributte = $value;
    }
}

