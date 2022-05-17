<?php
class car {
    public static $atributo01;//atributo estatico,com este atributo podemos acessar o atributo sem instanciar a classe
    public $atribnuto02;//atributo normal.
    public static function metodo1(){
        echo "Look my new car";
    }//metodo estatico

    public function metodo2(){
        echo "its a sport car";
    }//metodo normal
    

}
echo '<strong>';
car::$atributo01 = 'valor do atributo estatico';
echo car::$atributo01;
echo '<br>';
$car = new car();
$car->atribnuto02 = 'valor do atributo normal';
echo $car->atribnuto02;
echo '<br>';
car::metodo1();
echo '<br>';
$car->metodo2();//metodo normal
echo '<br>';

?>