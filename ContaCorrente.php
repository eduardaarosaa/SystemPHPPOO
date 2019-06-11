<?php

//Deixar o nome da classe e do arquivo o mesmo -- Indica boas práticas.
// Uma classe abstraí algo do mundo real - Exemplo neste sistema: banco.
//Toda classe tem um construtor por padrão.
class ContaCorrente
{
    public $conta1;
    private $titular;
    public  $agencia;
    private $numero;
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


    //Métodos mágicos - Com esse metodo criado, eu não preciso ficar criando um Get para cada método.
    public function  __get($atributo)
    {

        return $this->$atributo;
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

    public function transferir($valor, $conta1)
    {
        if(!is_numeric($valor)){

            echo "O valor passado não é um número";

        }
        $this->sacar($valor);
        $conta1->depositar($valor);
        return $this;
     }
    public function getTitular()
    {

        //Pode fazer um por um ... 

        return $this->titular;
    }
    //Métodos mágicos - Com esse metodo criado, eu não preciso ficar criando um SET para cada método.

    public function __set($atributo, $valor)
    {
        //chamando o método projetoAtributo toda vez que alguém tentar acessar ele.
        $this->protegeAtributo($atributo);

        // Condição -- Se para que esses dados não sejam alterados --
        if ($atributo == "titular" || $atributo == 'saldo') {

            //retorna uma mensagem de excessão.
            throw new Exception("O atributo $atributo está privado");
        }
        $this->$atributo = $valor;
    }

    public static function protegeAtributo($atributo) //Deixado o metodo estatico ele pode ser acessado por outros objetos.
    //Chamamos de encapsulamento de métodos.

    {
        if ($atributo == "titular" || $atributo == 'saldo') {

            //retorna uma mensagem de excessão.
            throw new Exception("O atributo $atributo está privado");
        }
    }
    public function setNumero($numero)
    {
        return $this->numero = $numero;
    }
    public function formataSaldo($saldo)
    {
        return number_format($saldo, 2, ",", ".");
    }
    public function getSaldo()
    {

        return $this->formataSaldo(900);
    }
    public function __toString() //metodo mágico - retorna uma mensagem em string.
    {
        return "Oi";
    }
}
