<?php
//importando a classe pessoa
require_once("pessoa.php");

class Teste{
     //objeto pessoa com visibilidade privada
    private $pessoa;

    public function __construct(){
        //criando objeto chamado pessoa recebe a classe pessoa
        $pessoa = new Pessoa();


        //passar um valor para o método setNome
        $pessoa->setNome($_POST['Nome']);

        //imprimir o valor do método getNome
        echo $pessoa->getNome()."<br> <br>";

        //passar um valor para o método setTelefone
        $pessoa->setTelefone($_POST['Telefone']);
        
         //imprimir o valor do método getTelefone
         echo $pessoa->getTelefone()."<br> <br>";

        //passar um valor para o método setOrigem
        $pessoa->setOrigem($_POST['origem']);

         //imprimir o valor do método getOrigem
        echo $pessoa->getOrigem()."<br> <br>";

        //passar um valor para o método setDatadocontato
        $pessoa->setDatadocontato($_POST['datadocontato']);

        //imprimir o valor do método getDatadocontato
        echo $pessoa->getDatadocontato()."<br> <br>";

        //passar um valor para o método setObservação
        $pessoa->setObservacao($_POST['observacao']);

        //imprimir o valor do método getObservação
        echo $pessoa->getObservacao()."<br> <br>";
    }
}new teste();

?>