<?php
/*
Problem: https://www.hackerrank.com/challenges/maximizing-xor/problem
*/

function maximizingXor($l, $r) {

  $maxXor = 0;

  for ($i = $l; $i <= $r; $i++) {
      for ($j = $i; $j <= $r; $j++) {
          $result = $i ^ $j;

          if ($result > $maxXor) {
              $maxXor = $result;
          }
      }
  }

  return $maxXor;
}

$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$stdin = fopen("php://stdin", "r");

fscanf($stdin, "%d\n", $l);

fscanf($stdin, "%d\n", $r);

$result = maximizingXor($l, $r);

fwrite($fptr, $result . "\n");

fclose($stdin);
fclose($fptr);






