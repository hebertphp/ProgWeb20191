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

class AlunoPhp extends aluno{
    private $av1=0;
    function setAv1($nota1,$nota2,$nota3){
        $this->av1=round(($nota1+$nota2+$nota3)/3,2);
    }
    function getAv1(){
        return $this->av1;
    }
    function imprimeAlunoAv1(){
         echo "Nome: ".$this->getNome();
         echo ", Ra: ".$this->getRa();
         echo ", AV1: ".$this->getAv1();
    }
}    

$obj = new AlunoPhp();
$obj->setNome("Joao");
$obj->setRa("91811234");
$obj->setAv1(5,6,8);
//var_dump($obj);
echo "<br>";
$obj->imprimeAlunoAv1();

?>
