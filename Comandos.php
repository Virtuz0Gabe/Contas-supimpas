<?php 

require_once("corrente.php");
require_once("poupanca.php");


// Contas:

// Conta marcelo:
$conta_1 = new poupanca("Gabriel");
$conta_1->Deposito(500);
echo $conta_1->Extrato();



// Conta Gabe
$conta_2 = new corrente("Marcos");
$conta_2->Deposito(1000);
echo $conta_2->Extrato();


// Transferência correta:
echo $conta_2->Transfer($conta_1, 25);

// Transferência incorreta:
echo "\n";
echo $conta_2->Transfer($conta_1, 40000);

// Sacar:
echo "\n";
echo $conta_1->Sacar(100);

?>
