<?php 

require_once("conta.php");
require_once("corrente.php");

class corrente extends conta{

    public function __construct($nome=''){
        $this->nome=$nome;
        $this->tipo = 'Corrente';

    }

    

    public function Sacar ($valor){
        $this->saldo = $this->saldo - $valor;
        return "O saque de " . $valor . "Foi efetuado com sucesso\n" . "O saldo atual da conta " . $this->tipo . "é de: " . $this->saldo . PHP_EOL;
    }

    public function Extrato(){
        return $this->saldo . PHP_EOL;
    }


    public function Transfer ($Conta_Recebe, $valor_transfer){
        if ($this->saldo < $valor_transfer){
            return "A tranferência de " . $valor_transfer . " foi encerrada!. Pois a conta de " . $this->nome . " não possui saldo suficiente" . PHP_EOL;
        }else{
            $this->saldo -= $valor_transfer;
            $Conta_Recebe->saldo += $valor_transfer;
        return "o Valor de " . $valor_transfer . " foi transferido com sucesso!\n" . "a Conta de " . $Conta_Recebe->nome . " ficou com saldo de " . $this->saldo . "\n" . "a Conta de " . $this->nome . " ficou com saldo de " . $Conta_Recebe->saldo . PHP_EOL;
            
        }
    }

}

?>