<?php
    $weight = $_POST['weight'];
    $height = $_POST['height'];

    $imc = $weight / $height ** 2;

    if($imc < 18.5) {
        echo "Abaixo do peso";
    }

    if($imc >= 18.5 && $imc <= 24.9) {
        echo "Peso normal";
    }

    if ($imc >=25 && $imc <= 29.9) {
        echo "Sobrepeso";
    }

    if ($imc >= 30 && $imc <= 34.9){
        echo "Obresidade Grau 1";
    }

    if ($imc >= 35 && $imc <= 39.9){
        echo "Obesidade Grau 2";
    }

    if ($imc >= 40) {
        echo "Obesidade Grau 3";
    }
?>