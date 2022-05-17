<?php
interface equipamento{
    public function ligar();
    public function desligar();
    public function abrirGeladeira();
    public function fecharGeladeira();
}
//implementação da interface
//
class geladeira implements equipamento{
    public function ligar(){
        echo "Ligando a geladeira";
    }
    public function desligar(){
        echo "Desligando a geladeira";
    }
    public function abrirGeladeira(){
        echo "Abrindo a geladeira";
    }
    public function fecharGeladeira(){
        echo "Fechando a geladeira";
    }
}
class Tv implements equipamento{
    public function ligar(){
        echo "Ligando a TV";
    }
    public function desligar(){
        echo "Desligando a TV";
    }
    public function abrirGeladeira(){
        echo "Abrindo a TV";
    }
    public function fecharGeladeira(){
        echo "Fechando a TV";
    }
}
class som implements equipamento{
    public function ligar(){
        echo "Ligando o som";
    }
    public function desligar(){
        echo "Desligando o som";
    }
    public function abrirGeladeira(){
        echo "Abrindo o som";
    }
    public function fecharGeladeira(){
        echo "Fechando o som";
    }
}
class maquinaDeLavar implements equipamento{
    public function ligar(){
        echo "Ligando a maquina de lavar";
    }
    public function desligar(){
        echo "Desligando a maquina de lavar";
    }
    public function abrirGeladeira(){
        echo "Abrindo a maquina de lavar";
    }
    public function fecharGeladeira(){
        echo "Fechando a maquina de lavar";
    }
}
$a = new geladeira();
$b = new Tv();
$c = new som();
$d = new maquinaDeLavar();

?>