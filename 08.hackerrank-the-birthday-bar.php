<?php
/*
Problem: https://www.hackerrank.com/challenges/the-birthday-bar/problem
*/

function birthday($s, $d, $m) {
  $totalSquares = count($s);
  $totalWays = 0;

  if ($totalSquares == 1 && $s[0] == $d && $m == 1) {
      $totalWays = 1;
  } elseif ($totalSquares >= $m) { //qtdBarras for maior ou igual que o mes
      for($i=0;$i<$totalSquares-1;$i++) {

          if($totalSquares-$i >= $m) { //se as barras restante é maior que o mes
            $soma = $s[$i];

            for($f=1;$f<$m;$f++) {
                $soma+=$s[$i+$f];
            }
          
            if ($soma == $d) {
              $totalWays++;
            }
          }
      }
  } else {
      $totalWays = 0;
  }

  return $totalWays; 
}

$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$n = intval(trim(fgets(STDIN)));

$s_temp = rtrim(fgets(STDIN));

$s = array_map('intval', preg_split('/ /', $s_temp, -1, PREG_SPLIT_NO_EMPTY));

$dm = explode(' ', rtrim(fgets(STDIN)));

$d = intval($dm[0]);

$m = intval($dm[1]);

$result = birthday($s, $d, $m);

fwrite($fptr, $result . "\n");

fclose($fptr);
