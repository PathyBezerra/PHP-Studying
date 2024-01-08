<?php

$nomes = ["Matheus", "Patricia", "Joao", "Maria"];
$a = 10;

foreach($nomes as $nome){
    echo "O nome do indice atual é $nome <br>";
    if($nome =="Patricia"){
        echo "Opa $a <br>";
    }
}