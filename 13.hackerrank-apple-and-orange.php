<?php
/*
Problem: https://www.hackerrank.com/challenges/apple-and-orange/problem
*/

function countApplesAndOranges($s, $t, $a, $b, $apples, $oranges) {
    $numApples = 0;
    $numOranges = 0;

    $totalApples = count($apples);
    for($i=0;$i<$totalApples;$i++){
        if(($a+$apples[$i]) >= $s && ($a+$apples[$i]) <= $t ){
            $numApples++;
        }
    }


    $totalOranges = count($oranges);
    for($i=0;$i<$totalOranges;$i++){
        if(($b+$oranges[$i]) >= $s && ($b+$oranges[$i]) <= $t ){
            $numOranges++;
        }
    }

    echo $numApples."\n".$numOranges;
}

$stdin = fopen("php://stdin", "r");

fscanf($stdin, "%[^\n]", $st_temp);
$st = explode(' ', $st_temp);

$s = intval($st[0]);

$t = intval($st[1]);

fscanf($stdin, "%[^\n]", $ab_temp);
$ab = explode(' ', $ab_temp);

$a = intval($ab[0]);

$b = intval($ab[1]);

fscanf($stdin, "%[^\n]", $mn_temp);
$mn = explode(' ', $mn_temp);

$m = intval($mn[0]);

$n = intval($mn[1]);

fscanf($stdin, "%[^\n]", $apples_temp);

$apples = array_map('intval', preg_split('/ /', $apples_temp, -1, PREG_SPLIT_NO_EMPTY));

fscanf($stdin, "%[^\n]", $oranges_temp);

$oranges = array_map('intval', preg_split('/ /', $oranges_temp, -1, PREG_SPLIT_NO_EMPTY));

countApplesAndOranges($s, $t, $a, $b, $apples, $oranges);

fclose($stdin);
