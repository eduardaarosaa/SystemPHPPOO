<?php

//Deixar o nome da classe e do arquivo o mesmo -- Indica boas práticas.
class ContaCorrente
{
    public $titular;
    public $agencia;
    public $numero;
    private $saldo; //private protege, deixando só a classe manipulando esse atributo.

    //As variáveis que foram usadas como parâmetros assim que o arquivo for inicializado era será
    //requirida.
    public function __construct($titular, $agencia, $numero, $saldo)
    {
        $this->titular = $titular; //Atribuir os valores em suas variáveis.
        $this->agencia = $agencia; //Palavra this reserva
        $this->numero = $numero; //this é quando fazemos referência a algo.
        $this->saldo = $saldo; //this dá acesso a tudo em uma classe.
    }
    //Métodos 
    //Nem todo método precisa ter um retorno.

    public function sacar($valor)
    {
        $this->saldo = $this->saldo - $valor;
        return $this; //Quando não retornamos nada, devemos retornar ela mesmo. -- Boas práticas.
    }
     public function depositar($valor)
    {
        $this->saldo = $this->saldo + $valor;
        return $this;
    }
}
// Uma classe abstraí algo do mundo real - Exemplo neste sistema: banco.
//Toda classe tem um construtor por padrão.
