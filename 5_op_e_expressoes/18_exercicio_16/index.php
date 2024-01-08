<?php

$a = 5;
$b = 3;
$c = 5;

//Igual
if($a == $c) {

    echo "A é igual a C";
    echo "<br>";
}

//Diferente
if($a != $b){

    echo "A é diferente a B";
    echo "<br>";
}

//Identico
if($a === $c){
    echo "A é Identico a C";
    echo "<br>";
    
}

//Não identico
if($a !== $b){
    echo "A é Não Identico a B";
    echo "<br>";
    
}

// ==, !=, ===, !==

$a = 5;
$b = 3;

if($a == $b) {
  echo "A é igual a B <br>";
}

if($a != $b) {
  echo "A é diferente a B <br>";
}

if($a === $b) {
  echo "A é idêntico a B <br>";
}

if($a !== $b) {
  echo "A não é idêntico a B <br>";
}
