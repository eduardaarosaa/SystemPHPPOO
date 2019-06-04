<?php

class exerPhp
{
    public $nome;
    public $idade;
    private $senha;


    public function __construct($nome, $idade, $senha)
    {

        $this->nome = $nome;
        $this->idade = $idade;
        $this->senha = $senha;
    }

    public function __get($atributo)
    {

        return $this->$atributo;
    }
    public function __set($atributo, $valor)
    {
        $this->$atributo->$valor;
    }
    public function setIdade($idade)
    {
        return $this->idade = $idade;

     }
}
