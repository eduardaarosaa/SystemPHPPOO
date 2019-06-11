<?php

class exer1Php
{

    public $nome;
    public $idade;
    public $email;

    //construtor

    public function __construtor($nome, $idade, $email)
    {

        $this->nome = $nome;
        $this->idade = $idade;
        $this->email = $email;
    }

    //métdos mágicos 

    public function __set($atributo, $valor)
    {

        return $this->$atributo->$valor;
    }

    public function __get($atributo)
    {

        return $this->$atributo;
    }
    public function setIdade($idade)
    {
        return $this->idade = $idade;
    }
}
