<?php
/*
Problem: https://www.hackerrank.com/challenges/strange-advertising/problem
*/

function viralAdvertising($n) {
    $cumulative = array();
    $shared = 5;

    for ($day=1;$day<=$n;$day++) {
        
        $div = intdiv($shared, 2);

        $shared = $div*3;

        array_push($cumulative,$div);
    } 

    return array_sum($cumulative);
}

$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$stdin = fopen("php://stdin", "r");

fscanf($stdin, "%d\n", $n);

$result = viralAdvertising($n);

fwrite($fptr, $result . "\n");

fclose($stdin);
fclose($fptr);
