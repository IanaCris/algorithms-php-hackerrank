<?php
/*
Problem: https://www.hackerrank.com/challenges/sock-merchant/problem
*/

function sockMerchant($n, $ar) {
    $totalPares = 0;

    //descobrir o numeros que representam as meias
    $meias = array_values(array_unique($ar));
    $totalMeias = count($meias);

    //qntas meias de cada cor/numero
    $arrayMeiasTipos = array_count_values($ar);
    
    for($i=0;$i<$totalMeias;$i++){
        if($arrayMeiasTipos[$meias[$i]] >= 2) {
            $totalPares+=intdiv($arrayMeiasTipos[$meias[$i]], 2);
        }
    }

    return $totalPares;
}

$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$stdin = fopen("php://stdin", "r");

fscanf($stdin, "%d\n", $n);

fscanf($stdin, "%[^\n]", $ar_temp);

$ar = array_map('intval', preg_split('/ /', $ar_temp, -1, PREG_SPLIT_NO_EMPTY));

$result = sockMerchant($n, $ar);

fwrite($fptr, $result . "\n");

fclose($stdin);
fclose($fptr);
