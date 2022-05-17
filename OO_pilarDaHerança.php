<?php
class carro extends veiculo {

function __construct($placa, $cor) {
    $this -> placa = $placa;
    $this -> cor = $cor;
}
    public $ano = '2018';
    public $modelo = 'Gol';
    public $marca = 'Volkswagen';
    public $valor = 'R$ 10.000,00';
    public $km = '0';
    public $combustivel = 'Flex';
    public $portas = '4';
    public $cambio = 'Manual';
    public $direcao = 'Hidraulica';
    
    function abrirPorta(){
        echo 'A porta esta abrindo';
    }
    function frear(){
        echo 'O carro esta freando';
    }
    function trocarMarcha(){
        echo 'O carro esta trocando de marcha';
    }
    
}

class Moto extends veiculo {
function __construct($placa, $cor) {
    $this -> placa = $placa;
    $this -> cor = $cor;
}
    public $ano = '2018';
    public $modelo = 'Honda';
    public $marca = 'Honda';
    public $valor = 'R$ 5.000,00';
    public $km = '0';
    public $combustivel = 'Flex';
    public $portas = '0';
    public $cambio = 'Manual';
    public $direcao = 'Hidraulica';
        function frear(){
        echo 'A moto esta freando';
    }
    function trocarMarcha(){
        echo 'A moto esta trocando de marcha';
    }
    

}
class veiculo {
    public $placa= null;
    public $cor = null;

    function acelerar(){
        return 'O veiculo esta acelerando';
    }
}

$carro = new Carro('ABC1234', 'Preto');

$moto = new Moto('HSD8899', 'Vermelha');
echo '<pre>';
print_r($carro);
echo '<hr>';
print_r($moto);
echo '<hr>';
$carro -> trocarMarcha();
echo '<hr>';
$carro -> frear();
echo '<hr>';
$carro -> abrirPorta();
echo '<hr>';
echo '<pre>';
echo '<p>o carro finaliza a execução do metodo runner</p>';
echo '<hr>';
echo '<p>Inicio do percurso</p>';
echo '<hr>';
$moto -> trocarMarcha();
echo '<hr>';
$moto -> frear();
echo '<hr>';
echo '<p>o moto finaliza a execução do metodo runner</p>';
?>