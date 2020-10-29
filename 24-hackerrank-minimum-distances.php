<?php
/*
Problem: https://www.hackerrank.com/challenges/minimum-distances/problem
*/

function minimumDistances($a) {
    $contNum = count($a);
    $listaDistancias = array();  

    for ($i=0;$i<$contNum;$i++) {
        for ($j=$i+1;$j<$contNum;$j++) {
            if ($a[$i] == $a[$j]) {#percorre cada item da lista e compara com os outros
                $listaDistancias[] = $j - $i;#calcula a distancia - acrescenta num array
            }
        }
    }

    if (count($listaDistancias) == 0) {
        return -1;
    }

    #mostrar o menor do array de distancias
    return  min($listaDistancias);
}

$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$stdin = fopen("php://stdin", "r");

fscanf($stdin, "%d\n", $n);

fscanf($stdin, "%[^\n]", $a_temp);

$a = array_map('intval', preg_split('/ /', $a_temp, -1, PREG_SPLIT_NO_EMPTY));

$result = minimumDistances($a);

fwrite($fptr, $result . "\n");

fclose($stdin);
fclose($fptr);
