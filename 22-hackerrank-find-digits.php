<?php
/*
Problem: https://www.hackerrank.com/challenges/find-digits/problem
*/

function findDigits($n) {
    $arrayCaracteres = str_split($n);//Cada caracter é item do array
    $numCaracteres = strlen($n);//Numero de caracteres
    $numDividores = 0;

    for ($i=0;$i<$numCaracteres;$i++) {
        if ($arrayCaracteres[$i] != 0 && $n % $arrayCaracteres[$i] == 0) {
            $numDividores++;
        }
    }
    
    return $numDividores;
}

$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$stdin = fopen("php://stdin", "r");

fscanf($stdin, "%d\n", $t);

for ($t_itr = 0; $t_itr < $t; $t_itr++) {
    fscanf($stdin, "%d\n", $n);

    $result = findDigits($n);

    fwrite($fptr, $result . "\n");
}

fclose($stdin);
fclose($fptr);
