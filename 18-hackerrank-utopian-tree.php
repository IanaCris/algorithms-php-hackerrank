<?php
/*
Problem: https://www.hackerrank.com/challenges/utopian-tree/problem
*/

function utopianTree($n) {
    $value = 1;

    for ($i=0;$i<$n;$i++) {
      
        if($value % 2 === 0){
            $value = $value+1;
        } else {
            $value = $value*2;
        }
    }

    return $value;
}

$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$stdin = fopen("php://stdin", "r");

fscanf($stdin, "%d\n", $t);

for ($t_itr = 0; $t_itr < $t; $t_itr++) {
    fscanf($stdin, "%d\n", $n);

    $result = utopianTree($n);

    fwrite($fptr, $result . "\n");
}

fclose($stdin);
fclose($fptr);
