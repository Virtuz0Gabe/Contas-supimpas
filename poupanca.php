<?php 


require_once("conta.php");
require_once("corrente.php");

class poupanca extends conta{

    public function __construct($nome=''){
        $this->nome=$nome;
        $this->tipo = 'Poupança';
    }


    public function Sacar ($valor){
        $this->saldo = $this->saldo - $valor;
        return "O saque de " . $valor . "Foi efetuado com sucesso\n" . "O saldo atual da conta " . $this->tipo . "é de: " . $this->saldo . PHP_EOL;
    }

    public function Deposito($valor){
        $this->saldo = $this->saldo + $valor;
        return $this->saldo . PHP_EOL;
    }

    public function Extrato(){
        return $this->saldo . PHP_EOL;
    }
        
    
}

?>