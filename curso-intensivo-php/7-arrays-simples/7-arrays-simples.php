<?php
    /**
     * Este arquivo serve para compreender, analisar e praticar o conteúdo 
     * do capítulo.
     */

    $animais = [];

    $animais[] = "Vaca";
    $animais[] = "Camelo";
    
    $animais[1] = "Porco";
    
    $newArraySize = array_push($animais, "Galinha", "Cachorro");
    
    /**
     * Essas funções (array_push e array_pop) lidam com arrays como se fossem 
     * pilhas (stacks).
     */
    
    // count() == sizeof()
    print "Número total de animais: " . count($animais) . "\n";
    
    if(array_is_list($animais)) {
        print "<br /> O array trabalhado é uma lista ordenada.";
        print "<br /> Índice do último elemento: " . array_key_last($animais);
        // count() - 1 ou sizeof() - 1
    }
    
    // Checa se existe dentro do array.
    if(!isset($animais[10])) {
        print "<br /> O índice 10 não existe no array...";
    }
    
    echo "<p>";
    echo implode(", ", $animais);
    echo "</p>";
    
    echo "<p>";
    foreach($animais as $animal) {
        foreach(str_split($animal) as $char) {
            echo $char . " ";
        }
        echo "<br />";
    }
    echo "</p>";
    
?>