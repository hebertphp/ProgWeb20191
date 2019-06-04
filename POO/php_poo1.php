<?php
//Fonte: http://www.kadunew.com/blog/php/heranca-no-php-5
class Pessoa
/*
classe pessoa. è uma super classe. É uma classe generica,
a partir dela podemos criar classes mais especificas.
*/
{
    //Atributos da classe
    var $nome;
    var $endereco;
    var $idade;
 
    // metodos que imprimem os atributos da classe
    function ImprimeDados()
    {
        echo "Nome: {$this->nome}<br>";
        echo "Endereço: {$this->endereco}<br>";
        echo "Idade: {$this->idade}<br>";
    }
}
 
class Funcionario extends Pessoa
/*
classe filha, herda atributos e métodos de sua classe pai,
no caso a classe pessoa. Veja o comando extends para
criar a herança
*/
{
    //atributos da classe
    var $salario;
    var $cargo;
 
    /* método criado para calcular o salario liquido e
      mostrar o mesmo*/
    function ObterSalario()
    {
       $this->salario -=$this->salario * 0.1;
        echo "Salário:{$this->salario}<br>";
    }
 
    /*Aqui temos uma sobre escrita (overriding). Veja
    que modificamos o funcionamento do metodo da classe pai
    acrescentando a impressão na tela do salario e o cargo.
    O Operador parent:: serve para chamar o metodo da classe pai*/
    function ImprimeDados()
    {
        parent::ImprimeDados();
        echo "Salário Bruto: {$this->salario}<br>";
        echo "Cargo: {$this->cargo}<br>";
    }
 
 
}
 
//criando o objeto $func e passando valores
$func = new funcionario();
$func->nome = "carlos Eduardo";
$func->endereco = "Assis Brasil, 123";
$func->idade = 23;
$func->salario = 2000;
$func->cargo = "Diretor";
echo "<b>Dados do funcionário</b><br>";
//passando para o nosso objeto o metodo de mostrar os dados
echo "{$func->ImprimeDados()}";
echo "<b>Salário do funcionário com desconto de 10%</b><br>";
//mostrando o salario com o metodo que desconta 10%
echo "{$func->ObterSalario()}";
?>
