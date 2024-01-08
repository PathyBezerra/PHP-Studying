<?php

$result= [];

for($i = 1; $i <= 10; $i++){
    
    array_push($result, $i);
}

echo "<pre>";
print_r($result);