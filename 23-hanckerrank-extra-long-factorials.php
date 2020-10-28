<?php
/*
Problem: https://www.hackerrank.com/challenges/extra-long-factorials/problem
*/

function extraLongFactorials($n) {
    echo gmp_fact($n);
}

$stdin = fopen("php://stdin", "r");

fscanf($stdin, "%d\n", $n);

extraLongFactorials($n);

fclose($stdin);
