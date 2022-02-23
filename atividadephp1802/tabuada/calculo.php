<?php
$numero = $_POST['numero'];

if(isset($numero)) {
    for ($x = 0; $x <= 10; $x++){
        echo '<br>' .$numero. 'x' .$x. '=' .$numero * $x;
    }
}

?>