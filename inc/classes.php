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
            case $this->imc <= 17:
                echo "<script>alert('Muito abaixo do peso! Seu IMC: $this->imc')</script>";
                break;
            case $this->imc <= 18.49:
                    echo "<script>alert('Abaixo do peso! Seu IMC: $this->imc')</script>";
                break;  
            case $this->imc <= 24.99:
                    echo "<script>alert('Peso normal! Seu IMC: $this->imc')</script>";
                break; 
            case $this->imc <= 29.99:
                    echo "<script>alert('Acima do peso! Seu IMC: $this->imc')</script>";
                break;     
            case $this->imc <= 34.99:
                    echo "<script>alert('Obesidade I! Seu IMC: $this->imc')</script>";
                break;
            case $this->imc <= 39.99:
                    echo "<script>alert('Obesidade I! Seu IMC: $this->imc')</script>";
                break;
            case $this->imc > 40:
                    echo "<script>alert('Obesidade III! Seu IMC: $this->imc')</script>";
                Break;                                     
            default:
                echo "<script>alert('Uhauuu!!!! Erro Sistema! $this->imc')</script>";
                break;
        }
    }


}
?>
