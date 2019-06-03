<?php
//funções do PHP que mostram erros - Deixar os erros sempre habilitados.

ini_set('display_errors', 1);
error_reporting(E_ALL);
header('Content-type: text/html; charset=utf-8');

require "ContaCorrente.php";
//Instânciando a classe ContaCorrente neste arquivo -- Como se eu estivesse fazendo uma
//Cópia do arquivo e armazenando na variável.

$conta = new ContaCorrente("João","1212","343434-4","500.00");
//É necessário passar os argumentos - Se não dá erro de arguments.
//Não se pode usar o echo para imprimir um objeto.
//echo $conta;

//Como já atribuiu os valores na classe, não precisa atribuir aqui.
// $conta->titular = "João";
// $conta->agencia = "1212";
// $conta->numero = "343434-4";
// $conta->saldo = "500.00";

$conta->sacar(400.90); //Do mesmo jeito que chamo o objeto posso chamar o método.
// Ele efetou o saque R$ 500,00 - R$400,90
$conta->depositar(400.90);
// Ele efetuou o deposito R$99,10+ R$400,90.
echo $conta->titular; // Imprimi o valor de um atributo.
//CASO
//Queira fazer um saque e um depósito em seguida use a seguinte sintaxe:
// $conta->sacar(400,90)
//->depositar(30.90);
//Desta maneira também funciona.
var_dump($conta);
