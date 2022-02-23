<?php

$array1 = array();

for($i = 1; $i <= 4; $i++){
    array_push($array1, $_POST['a1n' .$i]);

}

$array2 = array();

for($i = 1; $i <=4; $i++){
    array_push($array2, $_POST['a2n' . $i]);
}
 
for($i = 0; $i < 4; $i++) {
    $product = $array1[$i]*$array2[$i];
    echo '<br>['.$i.']'.' => '.$product;


    ?>