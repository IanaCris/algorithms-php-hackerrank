<?php
/*
Problem: https://www.hackerrank.com/challenges/staircase/problem
*/

function staircase($n) {
    $staircase = "";
    $matriz = array();

    for ($i=1;$i<=$n;$i++) {
        for ($j=1;$j<=$n;$j++) {  
            if ($j > $n-$i) {
                $staircase.="#";
            } else {
                $staircase.=" ";
            }
        }
        $matriz[$i] = $staircase;
        $staircase = "";
    }
    
    echo implode("\n",$matriz);
}

$stdin = fopen("php://stdin", "r");

fscanf($stdin, "%d\n", $n);

staircase($n);

fclose($stdin);