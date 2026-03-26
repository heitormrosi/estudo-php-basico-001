<?php

function which_is_larger(
    int | float $num1,
    int | float $num2
): int | float | NULL {
    if ($num1 > $num2) return $num1;
    elseif ($num2 > $num1) return $num2;
    else return NULL;
}
