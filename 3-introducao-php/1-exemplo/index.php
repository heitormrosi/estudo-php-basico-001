<?php 
    /**
     * Comentários são essentiais para:
     * 1. Explicar lógica de negócio para outros programadores.
     * 2. Estudar o código ao descrever sua lógica de negócio.
     * 3. Documentar o código: sua entrada, saída e lógica interna.
     */

    // Qual será a operação de divisão inteira?

    $nome = "World";
    $array = array(1, 2, 3, 4);
    
    $num1 = 1;
    $num2 = $num1;
    $num2 *= $num1;
    
    $texto = "
        Umbaque
        Lá lá lá
        When I'm blá blá blá
    ";

    $texto .= "Autor: $nome";

    echo $num2;
    echo "Hello, \"{$nome}\"!";
    echo <<<_END
        Eu quero ver
        uma noita aparecer
        num luar desigual.
        $texto
    _END;