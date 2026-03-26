<?php

function which_is_larger(int $num1, int $num2): ?int {
    if($num1 > $num2) return $num1;
    elseif($num2 > $num1) return $num2;
    else return NULL;
}