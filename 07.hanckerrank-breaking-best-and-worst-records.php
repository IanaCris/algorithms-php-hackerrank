<?php
/*
Problem: https://www.hackerrank.com/challenges/breaking-best-and-worst-records/problem
*/

function breakingRecords($scores) {
  $contScores = count($scores);
  $min = array();
  $max = array();
  $totalRecMin = 0;
  $totalRecMax = 0;
  $resultado = array();

  for ($i=0;$i<$contScores;$i++) {
    if ($i === 0) {
      array_push($min, $scores[$i]); 
      array_push($max, $scores[$i]); 
    }  else {
      if ($scores[$i] < end($min)) {
        array_push($min, $scores[$i]);
        $totalRecMin++;
      } elseif($scores[$i] > end($max)) {
        array_push($max, $scores[$i]);
        $totalRecMax++;
      }
    } 
  }

  array_push($resultado, $totalRecMax); 
  array_push($resultado, $totalRecMin); 
  
  return $resultado;
}

$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$stdin = fopen("php://stdin", "r");

fscanf($stdin, "%d\n", $n);

fscanf($stdin, "%[^\n]", $scores_temp);

$scores = array_map('intval', preg_split('/ /', $scores_temp, -1, PREG_SPLIT_NO_EMPTY));

$result = breakingRecords($scores);

fwrite($fptr, implode(" ", $result) . "\n");

fclose($stdin);
fclose($fptr);
