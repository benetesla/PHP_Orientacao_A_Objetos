<?php
namespace A;
class cliente implements cadastroInterface {
    public $nome = 'Benevanio';
 public function __construct(){
     echo '<pre>';
     print_r(get_class_methods($this));
     echo '</pre>';
 }
    public function __get($atributo) {
        return $this->$atributo;
    }
    public function cadastrar() {
        echo 'Cadastrando o cliente: ' . $this->nome;
    }
    
}
interface cadastroInterface {
        public function cadastrar();
    }

namespace B;
class cliente implements cadastroInterface {
    public $nome = 'Benetesla';
    public function __construct(){
     echo '<pre>';
     print_r(get_class_methods($this));
     echo '</pre>';
 }
    
    public function __get($atributo) {
        return $this->$atributo;
    }
    public function cadastrar() {
        echo 'Cadastrando o cliente: ';
    }
    public function remover() {
        echo 'Removendo o cliente: ';
    }
    
}
interface cadastroInterface {
        public function remover();
    }
$c = new \A\cliente();
print_r ($c->nome);
echo '<br>';
echo '<hr>';
$d = new \B\cliente();
print_r ($d->nome);
echo '<br>';

?>