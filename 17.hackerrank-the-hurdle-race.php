<?php
/*
 Problem: https://www.hackerrank.com/challenges/the-hurdle-race/problem
 */

function hurdleRace($k, $height) {

    $numMax = max($height);
     
    if ($k > $numMax) {
        $result = 0;
    } else {
        $result = $numMax-$k;
    }
    
    return $result;
}

$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$stdin = fopen("php://stdin", "r");

fscanf($stdin, "%[^\n]", $nk_temp);
$nk = explode(' ', $nk_temp);

$n = intval($nk[0]);

$k = intval($nk[1]);

fscanf($stdin, "%[^\n]", $height_temp);

$height = array_map('intval', preg_split('/ /', $height_temp, -1, PREG_SPLIT_NO_EMPTY));

$result = hurdleRace($k, $height);

fwrite($fptr, $result . "\n");

fclose($stdin);
fclose($fptr);
