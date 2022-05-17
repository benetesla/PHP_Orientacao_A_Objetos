<?php
class Funcionario{
    //atributos da classe Funcionario
   public $nome = 'Benevanio';
    public $idade = '23';
    public $cargo = 'Programador';
    public $salario = '2000';
    public $endereco = 'Rua: 1, nº: 1, bairro: Centro, cidade: São Paulo, Estado: SP';
    public $telefone = '+55 11 99999-9999';
    public $email = 'Bene@gmail.com';
    public $senha = '123456';
    public $login = 'BeneTesla';
    public $perfil = 'Programador';
    public $status = 'Ativo';
    public $data_cadastro = '07/06/2022';
    public $data_nascimento = '25/06/1998';
    public $data_admissao = '07/06/2022';
    public $data_demissao = '08/08/2024';

    //Metodos
    function resumirCadFunc(){
        return " $this->nome tem $this->idade anos e é $this->cargo <br> seu salario é de $this->salario <br> e seu endereço é $this->endereco <br> e seu telefone é $this->telefone <br> e seu email é $this->email <br> e sua senha é: $this->senha <br> e seu login é $this->login <br> e seu perfil é $this->perfil <br> e seu status é $this->status <br> e sua data de cadastro é $this->data_cadastro <br> e sua data de nascimento é $this->data_nascimento <br> e sua data de admissão é $this->data_admissao <br> e sua data de demissão é $this->data_demissao <br>";
    }
    function alterarSalario($salario){
        //atributo para alterar o salario do funcionario
        $this->salario = $salario;


    }
}
echo '<pre>';
$b = new Funcionario();
echo  $b-> resumirCadFunc();
echo '<hr>';
echo '</pre>';
$b -> alterarSalario(3600);
echo '<pre>';
echo $b-> resumirCadFunc();
echo '</pre>';

?>