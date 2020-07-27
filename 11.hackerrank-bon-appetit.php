<?php
/*
Problem: https://www.hackerrank.com/challenges/bon-appetit/problem
*/

function bonAppetit($bill, $k, $b) {
    $totalPedidos = count($bill);
    $somaPedidosDividir = 0;

    for($i=0;$i<$totalPedidos;$i++){
        if($i != $k){
            $somaPedidosDividir+=$bill[$i];
        }
    }

    $contaDividida = $somaPedidosDividir/2;

    if ($b - $contaDividida == 0) {
        echo "Bon Appetit";
    } else{
        echo $b - $contaDividida;
    }

}

$nk = explode(' ', rtrim(fgets(STDIN)));

$n = intval($nk[0]);

$k = intval($nk[1]);

$bill_temp = rtrim(fgets(STDIN));

$bill = array_map('intval', preg_split('/ /', $bill_temp, -1, PREG_SPLIT_NO_EMPTY));

$b = intval(trim(fgets(STDIN)));

bonAppetit($bill, $k, $b);
