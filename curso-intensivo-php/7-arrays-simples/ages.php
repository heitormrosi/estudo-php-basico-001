<?php
    $ages = [
        23, 31, 55
    ];

    $size = count($ages);
    $avg = array_sum($ages) / $size;

    echo "Número de itens no array: $size <br />";
    echo "Média de idades: $avg <br />";
?>