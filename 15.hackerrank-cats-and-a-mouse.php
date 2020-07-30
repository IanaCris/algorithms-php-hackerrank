<?php
/*
Problem: https://www.hackerrank.com/challenges/cats-and-a-mouse/problem
*/

function catAndMouse($x, $y, $z) {
    $a = abs($x-$z);   
    $b = abs($y-$z); 

    if($a < $b){ //A ganha
      return "Cat A";
    } elseif($b < $a){ //B ganha
      return "Cat B";
    } else { //C escapa
      return "Mouse C";
    }
}

$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$stdin = fopen("php://stdin", "r");

fscanf($stdin, "%d\n", $q);

for ($q_itr = 0; $q_itr < $q; $q_itr++) {
    fscanf($stdin, "%[^\n]", $xyz_temp);
    $xyz = explode(' ', $xyz_temp);

    $x = intval($xyz[0]);

    $y = intval($xyz[1]);

    $z = intval($xyz[2]);

    $result = catAndMouse($x, $y, $z);

    fwrite($fptr, $result . "\n");
}

fclose($stdin);
fclose($fptr);
