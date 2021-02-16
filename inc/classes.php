<?php

class Imc {
        private $nome;
        private $peso;
        private $altura;
        private $imc;
   
    function __construct($nome,$peso,$altura){
        $this->nome = $nome;
        $this->peso = floatval($peso);
        $this->altura = floatval($altura);
    }

    function calcImc(){
        $this->imc = $this->peso / ($this->altura*$this->altura);
        return $this->imc;
    }

    function checkImc(){
        
        switch ($this->imc) {
            case $this->imc <= 20:
                echo "<script>alert('Abaixo do Peso! $this->imc')</script>";
                break;
            
            case $this->imc <= 28:
                    echo "<script>alert('Peso Normal! $this->imc')</script>";
                    break;            
            default:
                echo "<script>alert('Uhauuu!!!! Erro Sistema! $this->imc')</script>";
                break;
        }
    }


}
?>
