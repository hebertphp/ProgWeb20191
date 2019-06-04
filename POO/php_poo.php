<?php
class Aluno
{
    private $nome = '';
    private $ra='';
    
    function imprimeAluno()
    {
        echo "Nome: ".$this->nome;
        echo ", Ra: ".$this->ra;
        
    }
    function setNome($nome){
        $this->nome=$nome;
    }
    function getNome(){
        return $this->nome;
    }
    function setRa($ra){
        $this->ra=$ra;
    }
    function getRa(){
        return $this->ra;
    }
}


$obj = new Aluno();
$obj->setNome("Joao");
$obj->setRa("91811234");
echo "<br>";
$obj->imprimeAluno();

?>
