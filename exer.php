<?php 

require "exerPhp.php";

$dados = new exerPhp("Duda","20","123");

$dados->nome;

echo $dados->nome;

$dados->senha;
echo $dados->senha;

$dados->idade = "21";

var_dump($dados);


