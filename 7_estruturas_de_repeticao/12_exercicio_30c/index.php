<?php

$array = [];

for($i = 10; $i <= 20; $i++) {
    array_push($array, $i);
}

echo "<pre>";
print_r($array);

for($i = 0; $i < count($array); $i++){
    if($array[$i] % 2 != 0){
       echo "Numero impar: $array[$i] <br>";
    }
}
