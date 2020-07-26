<?php
/*
Problem: https://www.hackerrank.com/challenges/migratory-birds/problem
*/

function migratoryBirds($arr) {

  $rankBirds = array_count_values($arr); //quantas aparições por tipo de pássaro
  $maxTypeBird = array_keys($rankBirds, max($rankBirds)); //array com as maiores aparições
  $minBirdID = (min($maxTypeBird)); //retornar o de menor ID
  
  return $minBirdID;
}

$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$arr_count = intval(trim(fgets(STDIN)));

$arr_temp = rtrim(fgets(STDIN));

$arr = array_map('intval', preg_split('/ /', $arr_temp, -1, PREG_SPLIT_NO_EMPTY));

$result = migratoryBirds($arr);

fwrite($fptr, $result . "\n");

fclose($fptr);
