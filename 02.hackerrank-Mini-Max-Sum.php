<?php
/*
Problem: https://www.hackerrank.com/challenges/mini-max-sum/problem
*/

function miniMaxSum($arr) {
    $menores = $arr;
    $maiores = $arr;

    
    sort($menores);
    $menoresSoma = array_splice($menores, 0, 4);

    rsort($maiores);
    $maioresSoma = array_splice($maiores, 0, 4);

    echo array_sum($menoresSoma)." ".array_sum($maioresSoma);
}

$stdin = fopen("php://stdin", "r");

fscanf($stdin, "%[^\n]", $arr_temp);

$arr = array_map('intval', preg_split('/ /', $arr_temp, -1, PREG_SPLIT_NO_EMPTY));

miniMaxSum($arr);

fclose($stdin);