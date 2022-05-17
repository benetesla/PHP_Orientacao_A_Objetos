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
        echo 'Desengatando a embreagem com a mao e engatar a marcha com o pe';
    }
    

}
class trator extends veiculo {
function __construct($placa, $cor) {
    $this -> placa = $placa;
    $this -> cor = $cor;
}
    public $ano = '2018';
    public $modelo = 'husky';
    public $marca = 'husky';
    public $valor = 'R$ 200.000,00';
    public $km = '0';
    public $combustivel = 'Flex';
    public $portas = '0';
    public $cambio = 'Manual';
    public $direcao = 'Hidraulica';
        function frear(){
        echo 'O trator esta freando';
    }
    function trocarMarcha(){
        echo 'O trator esta trocando de marcha';
    }
    

}


class veiculo {
    public $placa= null;
    public $cor = null;

    function acelerar(){
        return 'O veiculo esta acelerando';
    }
    function trocarMarcha(){
        echo 'O veiculo esta trocando de marcha';
    }
}

$carro = new Carro('ABC1234', 'Preto');
$moto = new Moto('HSD8899', 'Vermelha');
$trator = new trator('HSD8999', 'preto');
$carro -> trocarMarcha();
echo '<br>';
$moto -> trocarMarcha();
echo '<br>';
$trator -> trocarMarcha();

?>