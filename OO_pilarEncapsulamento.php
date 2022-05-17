<?php
//encapulsamento- encapsulamento é o processo de encapsular dados e metodos de uma classe, para que não sejam acessados diretamente pelo usuario.

class father{
private $nome= 'Benevanio';//atributo privado
protected $idade= 23;//atributo protegido
public $familia= 'Santos';//atributo publico
public $humor= 'Happy';
//apos a chamada do metodo public estamos tornando o objeto publico acessesivel para todos os metodos e atributos da classe
 public function __get($atributo){
     return $this->$atributo;
 }
    public function __set($atributo,$valor){
        $this->$atributo = $valor;
    }
    private function executarMania(){
        echo ' E ai, filho oque esta fazendo agora?';
    }//metodo privado
    protected function responder(){
        echo ' Como esta o jogo?';
    }//metodo protegido
    public function executarAcao(){
        $this->executarMania();
        echo '<br>';
        $this->responder();
    }

}
//esta e a classe filha
class son extends father {
    private $nome= 'Bartolomeu';
    protected $idade= 8;
    public $familia= 'Santos';
    public $humor= 'confused';
    //metdo publico que sobreescreve o metodo da classe pai
    public function __get($atributo){
        return $this->$atributo;
    }
    //metodo publico que sobreescreve o metodo da classe pai
    public function __set($atributo,$valor){
        $this->$atributo = $valor;
    }
    private function executarMania(){
        echo ' Estou jogando  RPG';
    }
    protected function responder(){
        echo 'Estou com medo de perder o jogo';
    }
    public function executarAcao(){
        $this->executarMania();
        echo '<br>';
        $this->responder();
    }
}
//metodo get_class_methods() retorna um array com todos os metodos da classe
echo '<hr>';
echo '<pre>';
print_r(get_class_methods('father'));
echo '<br>';
echo '<hr>';
//este e o objeto pai
$father = new Father();
echo '<i>Nome:'.$father->__get('nome') . '<br>' . 'Idade:'.$father->__get('idade') . '<br>' . 'Familia:'.$father->__get('familia') . '<br>' . 'Humor:'.$father->__get('humor') . '</i>';

echo '<br>';
echo $father->executarAcao();
echo '<br>';
echo '<hr>';
echo '<pre>';
print_r($father);

//agora estamos criando um objeto filho
echo '<hr>';
$son = new Son();

echo '<i>Nome:'.$son->__get('nome') . '<br>' . 'Idade:'.$son->__get('idade') . '<br>' . 'Familia:'.$son->__get('familia') . '<br>' . 'Humor:'.$son->__get('humor') . '</i>';
echo '<br>';
echo $son->executarAcao();
echo '<br>';
echo '<hr>';
echo '<pre>';
print_r($son);
echo '<hr>';

?>