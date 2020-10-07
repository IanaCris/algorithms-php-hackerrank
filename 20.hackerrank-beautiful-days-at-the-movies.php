<?php
/*
Problem: https://www.hackerrank.com/challenges/beautiful-days-at-the-movies/problem
*/

function beautifulDays($i, $j, $k) {
    $contBD = 0;

    for ($dia=$i;$dia<=$j;$dia++) {
        $newNumber = intval(strrev($dia));

        if(($dia-$newNumber)%$k == 0){
            $contBD++;
        }

    }
    return $contBD;
}

$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$stdin = fopen("php://stdin", "r");

fscanf($stdin, "%[^\n]", $ijk_temp);
$ijk = explode(' ', $ijk_temp);

$i = intval($ijk[0]);

$j = intval($ijk[1]);

$k = intval($ijk[2]);

$result = beautifulDays($i, $j, $k);

fwrite($fptr, $result . "\n");

fclose($stdin);
fclose($fptr);
