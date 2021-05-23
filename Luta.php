<?php


require_once "Lutador.php";
class Luta {

    // Atributos
    private $desafiante, $desafiado, $rounds, $aprovada;

    // Métodos Especiais
    private function getdesafiante(){
        return $this->desafiante->getnome();
    }
    private function setdesafiante($value){
        $this->desafiante = $value;
    }
    private function getdesafiado(){
        return $this->desafiado->getnome();
    }
    private function setdesafiado($value){
        $this->desafiado = $value;
    }
    private function getrounds(){
        return $this->rounds;
    }
    private function setrounds($value){
        $this->rounds = $value;
    }
    private function getaprovada(){
        return $this->aprovada;
    }
    private function setaprovada($value){
        $this->aprovada = $value;
    }

    // Métodos
    function marcarLuta($desafiante, $desafiado){
        if (($desafiante->getcategoria() == $desafiado->getcategoria()) && ($desafiante != $desafiado)){
            $this->desafiante = $desafiante->getnome();
            $this->desafiado = $desafiado->getnome();
            $this->setaprovada(true);
            $this->setdesafiado($desafiado);
            $this->setdesafiante($desafiante);
            echo "<br/>Luta entre ".$this->getdesafiante()." e ".$this->getdesafiado()." marcada com sucesso!";
        }
        else{
            $this->setdesafiante(null);
            $this->setdesafiado(null);
            $this->setaprovada(false);
            echo "<br/>Erro ao marcar a luta";
        }
    }
    function lutar(){
        if ($this->getaprovada()){
            $this->desafiante->apresentar();
            $this->desafiante->apresentar();
            $vencedor = rand(0, 2);
            switch ($vencedor){
                case 0:    // Empate
                    echo "<br/>Empatou!";
                    $this->desafiado->empatarLuta();
                    $this->desafiante->empatarLuta();
                    break;
                case 1:    // Desafiado vence
                    echo "<br/>".$this->getdesafiado()." venceu!";
                    $this->desafiante->perderLuta();
                    $this->desafiado->ganharLuta();
                    break;
                case 2:    // Desafiante vence
                    echo "<br/>".$this->getdesafiante()." venceu!";
                    $this->desafiado->perderLuta();
                    $this->desafiante->ganharLuta();
            }
        }
        else{
            echo "<br/>A luta não foi aprovada!";
        }
    }
}