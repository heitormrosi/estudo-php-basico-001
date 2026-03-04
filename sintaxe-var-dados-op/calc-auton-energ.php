<?php
    /**
     * # 1. Projeto de calculadora de autonomia energética (0a Central Bank) 
     * 
     * A energia do anel é o recurso mais crítico da Tropa. Em sistemas de controle, a distinção entre float e int é vital para evitar a degradação de precisão.
     * 
     * ## Requisitos Técnicos
     * 
     * 1. Variáveis de Entrada: Processe cargaAtual (percentual), consumoPorHora (escalar) e horasDePatrulha.
     * 2. Cálculo: Utilize operadores aritméticos para projetar a autonomia restante.
     * 3. Atribuição: Aplique operadores de atribuição combinada (-=, *=) para atualizar o estado da bateria no script.
     * 4. Formatação: A saída deve ser uma string técnica utilizando concatenação fluida.
     *
     * ## Questionário
     * 
     * 1. Qual a saída de $autonomia = 100 - 10 * 2 / 5;?
     * 2. Como se representa o operador que reduz a carga em 5% via atribuição combinada?
     * 3. Se $carga = "85.5", qual o tipo do resultado de $carga * 1 no PHP 8.2?
     * 4. Qual a diferença prática entre (int) 95.9 e round(95.9) em um relatório de energia?
     * 5. Na expressão $res = $a * $b + $c / $d, qual a ordem exata de execução?
     * 
     * ## Respostas
     * 
     * 1. 96.
     * 2. $cargaTotal -= 5;
     * 3. Ao multiplicar um inteiro com um número de ponto flutuante, o resultado 
     *  será um número de ponto flutuante, isto é, 85.5.
     * 4. O type casting apenas transforma o número em inteiro e remove a parte 
     *  decimal, enquanto a função round() arredonda a parte decimal para atingir 
     *  um inteiro.
     * 5. Primeiro, $a * $b, depois, $c / $d. Por fim, a soma dos resultados. 
     *  A ordem de operação em PHP segue a ordem matemática PEMDAS: parênteses, 
     *  exponenciação, multiplicação, divisão, adição e subtração.
     */

    $cargaAtual = 79;
    $consumoPorHora = 1;
    $horasDePatrulha = 8;


    $autonomia = $cargaAtual / ($horasDePatrulha * $consumoPorHora);

    echo "A carga total é de $cargaAtual. <br />";
    echo "A autonomia da bateria é de $autonomia horas. <br />";

    // Situação em que a bateria está quase acabando.
    
    $cargaAtual -= 50;
    
    $autonomia = $cargaAtual / ($horasDePatrulha * $consumoPorHora);

    echo "A carga total é de $cargaAtual. <br />";
    echo "A autonomia da bateria é de $autonomia horas. <br />";
?>