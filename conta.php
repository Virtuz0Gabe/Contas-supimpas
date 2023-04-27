<?php

//use corrente as GlobalCorrente;




abstract class conta {
    protected $saldo = 1500;
    protected $nome = '';
    protected $tipo = '';

    /*public function __construct(){
        protected $this->saldo = 2000
        protected $this]

        
    }
    */

    public function Extrato(){
        return $this->saldo;
    }

    public function Deposito($valor){
        $this->saldo = $this->saldo + $valor;
        
    }

    public function Sacar($valor){
        $saldo = $this-> saldo - $valor;
        echo $this->nome . "seu saldo atual é:" . $saldo;
    }

}



// Poupança -------

/*
class poupanca extends conta{
    public function Sacar ($valor){
        $this->saldo = $this->saldo - $valor;
        return $this->saldo . PHP_EOL;
    }

    public function Deposito($valor){
        $this->saldo = $this->saldo + $valor;
        return $this->saldo . PHP_EOL;
    }

    public function Extrato(){
        return $this->saldo . PHP_EOL;
    }
        
    
}
*/


/// -----------------


// Corrente ----

/*
class corrente extends conta{

    public function Sacar ($valor){
        $this->saldo = $this->saldo - $valor;
        return $this->saldo . PHP_EOL;
    }

    public function Extrato(){
        return $this->saldo . PHP_EOL;
    }

    public function Transfer ($Conta_Recebe, $valor_transfer){
        if ($this->saldo < $valor_transfer){
            return "A tranferência foi encerrada, a conta TAL não possui saldo suficiente";
        }else{
            $this->saldo -= $valor_transfer;
            $Conta_Recebe->saldo += $valor_transfer;
            return "o Valor de " . $valor_transfer . " foi transferido com sucesso!\n" . "a Conta 1 ficou com saldo de " . $this->saldo . "\n" . "a Conta 2 ficou com saldo de " . $Conta_Recebe->saldo;
            
        }
    }

}
*/

/// ---------------------------------------

/*
// Contas:

// Conta marcelo:
$conta_1 = new poupanca();
$conta_1->Deposito(500);
echo $conta_1->Extrato();



// Conta Gabe
$conta_2 = new corrente();
$conta_2->Deposito(1000);
echo $conta_2->Extrato();

echo $conta_2->Transfer($conta_1, 25);
*/
?>


