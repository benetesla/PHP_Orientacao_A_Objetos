<?php
class Funcionario{
    //atributos da classe Funcionario
    public $nome = null;
    public $idade = null;
    public $cargo = null;
    public $salario = null;
    //atributos de endereço
    //getters e setters
//metodo getters e responsavel por retornar o valor do atributo
    public function setNome($nome){
        $this->nome = $nome;
    }
//metodo getters e responsavel por retornar o valor do atributo
    public function setIdade($idade){
        $this->idade = $idade;
    }
    public function setCargo($cargo){
        $this->cargo = $cargo;
    }
    public function setSalario($salario){
        $this->salario = $salario;
    }



    function resumircadFunc(){
        return " $this->nome tem $this->idade anos e é $this->cargo <br> seu salario é de $this->salario <br>";
    }
    function alterarSalario($salario){
        //atributo para alterar o salario do funcionario
        $this->salario = $salario;

}
}
echo '<pre>';
$b = new funcionario();
$b->setNome('Benevanio');
$b->setIdade('23');
$b->setCargo('Programador');
$b->setSalario('2000');

echo  $b-> resumircadFunc();
echo '<hr>';
echo '</pre>';
$b -> alterarSalario(3600);
$b -> setIdade('24');
echo '<pre>';
echo $b-> resumircadFunc();
echo '</pre>';

?>