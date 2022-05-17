<?php
//metodo construtor para inicializar os atributos da classe  e metodo destrutor para destruir os atributos da classe
//metodo construtor
class pessoa{
    public $nome = null;
    public $idade = null;
    public $cargo = null;
    public $salario = null;
    public $endereco = null;
    public $telefone = null;
    public $runner = null;
    function __construct($nome){
        echo '<pre>';
        echo '<hr>';
       $this->nome = $nome; 
        echo '</pre>';
    }
    function __get($atributo){
        return $this->$atributo;
    }
    function runner(){
       return " $this->nome tem $this->idade anos e é $this->cargo <br> seu salario é de $this->salario <br> e seu endereço é $this->endereco <br> e seu telefone é $this->telefone <br> neste momento esta sendo executado o metodo runner $this->runner"; 
    }
}
$pessoa = new pessoa('Benevanio');
$pessoa->idade = 23;
$pessoa->cargo = 'Programador';
$pessoa->salario = 2000;
$pessoa->endereco = 'Rua dois';
$pessoa->telefone = '3232-3232';
$pessoa->runner = 'Runner';
echo $pessoa->runner();

//este atributo pega o valor do atributo nome dentro da classe constructor e o atributo nome recebe o valor do atributo nome dentro da classe constructor
 echo '<br> Nome:'. $pessoa->__get('nome');
    echo '<br>';
    echo '<br>' . $pessoa->runner();


?>