<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Média de Notas</h1>

    <form action="atv3.php" method="POST">
        <label for="nota1">Nota 1</label>
        <input type="number" id="nota1" name="nota1">
        <br>
        <label for="nota2">Nota 2</label>
        <input type="number" id="nota2" name="nota2">
        <br>
        <label for="nota3">Nota 3</label>
        <input type="number" id="nota3" name="nota3">
        <br>
        <label for="nota4">Nota 4</label>
        <input type="number" id="nota4" name="nota4">
        <br>

        <input type="submit" value="Calcular">
    </form>
</body>
</html>


<?php

$nota1 = $_POST ['nota1'];
$nota2 = $_POST ['nota2'];
$nota3 = $_POST ['nota3'];
$nota4 = $_POST ['nota4'];

$numero  = $_POST ['media'];
if(isset($nota1) && isset($nota2) && isset($nota3) && isset($nota4)) {
    $media = ($nota1 + $nota2 + $nota3 + $nota4) / 4;

    echo '<br>Média: ' .$media;
}



?>
