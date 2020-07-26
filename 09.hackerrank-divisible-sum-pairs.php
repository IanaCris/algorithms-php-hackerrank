<?php
/*
Problem: https://www.hackerrank.com/challenges/divisible-sum-pairs/problem
*/

function divisibleSumPairs($n, $k, $ar) {
  $sumPairs = 0;

  for($i=0;$i<$n;$i++) {

    for($f=$i+1;$f<$n;$f++) {

      if(($ar[$i]+$ar[$f]) % $k == 0) {
        $sumPairs++;
      }
      
    }

  }

  return $sumPairs;
}

$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$stdin = fopen("php://stdin", "r");

fscanf($stdin, "%[^\n]", $nk_temp);
$nk = explode(' ', $nk_temp);

$n = intval($nk[0]);

$k = intval($nk[1]);

fscanf($stdin, "%[^\n]", $ar_temp);

$ar = array_map('intval', preg_split('/ /', $ar_temp, -1, PREG_SPLIT_NO_EMPTY));

$result = divisibleSumPairs($n, $k, $ar);

fwrite($fptr, $result . "\n");

fclose($stdin);
fclose($fptr);
