<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cálculo IMC - PHP OO</title>
</head>
<body>
<?php 
//Include arquivo de classes.
include "inc/classes.php";
?>
    <form action="<?php $PHP_SELF; ?>" method="post">
    <p>Nome: <input type="text" name="nome" id=""></p>
    <p>Peso: <input type="text" name="peso" id=""> Kg</p>
    <p>Altura: <input type="text" name="altura" id=""></p>
    <input type="submit" value="Enviar" name="btnEnviar">
    </form>
    
<?php
    
    if(!empty($_POST['btnEnviar'])){

        if(empty($_POST['nome'])) {
            echo "<script>alert('Você deve informar um nome!');</script>";
            exit;
        }
        elseif(empty($_POST['peso'])){
            echo "<script>alert('Você deve informar um peso!');</script>";
            exit;
        }
        elseif(empty($_POST['altura'])){
            echo "<script>alert('Você deve informar uma altura! Ex: 1.85');</script>";
            exit;
        }
        else {

        $calculo = new Imc($_POST['nome'],$_POST['peso'],$_POST['altura']);

        echo $calculo->calcImc();

        $calculo->checkImc();
        
        }
    }
?>
</body>
</html>