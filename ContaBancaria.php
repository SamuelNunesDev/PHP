<?php


class ContaBancaria{

    public $numConta;
    protected $tipo;
    private $dono, $saldo, $status = false;


    public function __construct(){
        $this->saldo = 0;
        $this->status = false;
        echo "Conta criada com sucesso! <br/>";
    }
    public function abrirConta($dono, $tipo){
        $this->numConta = rand(001, 100);
        $this->dono = $dono;

        if ($tipo == "cc"){
            $this->tipo = "Conta-Corrente";
            $this->saldo = 50;
        }
        elseif ($tipo == "cp"){
            $this->tipo = "Conta-Poupança";
            $this->saldo = 150;
        }
        else{
            echo "Erro ao abrir conta!<br/>";
        }
        $this->dono = $dono;
        $this->status = true;
        echo "Conta aberta com sucesso! <br/> Informações da conta... <br/>Numero da conta: $this->numConta <br/>Nome 
              do titular: $this->dono <br/>Tipo: $this->tipo <br/>Saldo: R$".number_format($this->saldo, '2',
                ',', '.')." <br/>";
    }
    public function fecharConta(){
        if ($this->saldo < 0){
            printf("Operação negada! Você está com saldo devedor de -R$%.2f<br/>Pague sua dívida antes de fechar
                    a sua conta! <br/>", $this->saldo);
        }
        elseif ($this->saldo > 0){
            printf("Operação negada! Você está com um saldo de R$%.2f <br/>Retire seu dinheiro da conta antes de
                    fechar! <br/>", $this->saldo);
        }
        else{
            $this->setnumConta(000);
            $this->status = false;
            $this->status = false;
            echo "Conta fechada com sucesso! <br/>";
        }
    }
    public function sacar($value){
        if ($this->status == true && $this->saldo >= $value){
            $this->saldo -= $value;
            printf("Saque de R$%.2f realizado com sucesso! <br/>", $value);
        }
        elseif ($this->status == true && $this->saldo <= $value){
            echo "Saldo indisponível para realizar saque! Consulte seu saldo atual. <br/>";
        }
        else{
            echo "Erro! Conta não encontrada ou inativa!<br/>";
        }
    }
    public function depositar($value){
        if ($this->status == true){
            $this->saldo += $value;
            printf("Déposito de R$%.2f realizado com sucesso!<br/>", $value);
        }
        else{
            echo "Erro! Conta não encontrada ou inativa!<br/>";
        }
    }
    public function pagarMensal(){
        if ($this->tipo == "Conta-Corrente"){
            $this->saldo -= 12;
            echo "Pagamento de mensalidade da conta corrente efetuado com sucesso! <br/>";
        }
        elseif ($this->tipo == "Conta-Poupança"){
            $this->saldo -= 20;
            echo "Pagamento de mensalidade da conta poupança efetuado com sucesso! <br/>";
        }
    }
    public function getnumConta(){
        return $this->numConta;
    }
    public function setnumConta($value){
        $this->numConta = $value;
    }
    public function gettipo(){
        return $this->tipo;
    }
    public function settipo($value){
        $this->tipo = $value;
    }
    public function getsaldo(){
        echo "Saldo atual: R$".number_format($this->saldo,2,',','.')."<br/>";
        return $this->saldo;
    }
    public function setsaldo($value){
        $this->saldo = $value;
    }
    public function getdono(){
        return $this->dono;
    }
    public function setdono($value){
        $this->dono = $value;
    }
}
