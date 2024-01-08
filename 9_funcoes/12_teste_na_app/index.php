<?php

function sumEvenNumbers($n) {
    // Inicializa a variável de soma
    $soma = 0;

    // Utiliza uma estrutura de repetição para percorrer os números de 1 até n
    for ($i = 1; $i <= $n; $i++) {
        // Verifica se o número atual é par
        if ($i % 2 == 0) {
            // Adiciona o número par à soma
            $soma += $i;
        }
    }

    // Retorna o resultado final
    return $soma;
}

// Exemplo de uso
$numeroFornecido = 10;
$resultado = sumEvenNumbers($numeroFornecido);
echo "A soma dos números pares de 1 até $numeroFornecido é: $resultado";

?>
