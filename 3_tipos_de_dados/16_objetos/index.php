<?php

  class Pessoa {

    function falar() {
      echo "Olá pessoal!";
    }

  }

  $matheus = new Pessoa();

  $matheus->nome = "Patricia";

  echo $matheus->nome;

  echo "<br>";

  $matheus->falar();