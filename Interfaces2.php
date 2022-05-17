<?php
interface animal{
   public function respirar();
    public function mover();
    public function comer();
}

//implementação da interface
class cavalo implements animal{
    public function respirar(){
        echo "Respirand
        o como um cavalo";
    }
    public function mover(){
        echo "Andando como um cavalo";
    }
    public function comer(){
        echo "Comendo como um cavalo";
    }
}
class gato implements animal{
    public function respirar(){
        echo "Respirando como um gato";
    }
    public function mover(){
        echo "Andando como um gato";
    }
    public function comer(){
        echo "Comendo como um gato";
    }
}
class cachorro implements animal{
    public function respirar(){
        echo "Respirando como um cachorro";
    }
    public function mover(){
        echo "Andando como um cachorro";
    }
    public function comer(){
        echo "Comendo como um cachorro";
    }
}
$cavalo = new cavalo();
$cavalo->respirar();
echo '<br>';
$cavalo->mover();
echo '<br>';
$cavalo->comer();
echo '<br>';
$gato = new gato();
$gato->respirar();
echo '<br>';
$gato->mover();
echo '<br>';
$gato->comer();
echo '<br>';
$cachorro = new cachorro();
$cachorro->respirar();
echo '<br>';
$cachorro->mover();
echo '<br>';
$cachorro->comer();
echo '<br>';
?>