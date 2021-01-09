<?php
/*
Problem: https://www.hackerrank.com/challenges/permutation-equation/problem
*/

// Complete the permutationEquation function below.
function permutationEquation($p) {
    $contNum = count($p);
    $newArray = array();
    
    for ($i=1;$i<=$contNum;$i++) {
        //ver que posicao ele tá
        $key1 = array_search($i, $p) + 1;
        
        //pega a nova posicao e verifica qual numero tá nessa nova posicao
        $key2 = array_search($key1, $p) + 1;
        
        $newArray[] = $key2;
    }
    
    return $newArray;
}

$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$stdin = fopen("php://stdin", "r");

fscanf($stdin, "%d\n", $n);

fscanf($stdin, "%[^\n]", $p_temp);

$p = array_map('intval', preg_split('/ /', $p_temp, -1, PREG_SPLIT_NO_EMPTY));

$result = permutationEquation($p);

fwrite($fptr, implode("\n", $result) . "\n");

fclose($stdin);
fclose($fptr);
