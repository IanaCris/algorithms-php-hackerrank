<?php
/*
Problem: https://www.hackerrank.com/challenges/counting-valleys/problem
*/

function countingValleys($steps, $path) {
    // Write your code here
    $numValleys = 0;
    $altitude = 0;
    $arrayLetters = str_split($path);
    
    for ($p=0;$p<$steps;$p++) {
            
        if ($arrayLetters[$p] == 'U') {
            $altitude++; 
            
            if ($altitude == 0) {
                $numValleys++;
            }
        } else {
            $altitude--;
        }               
        
    }
    
    return $numValleys;

}

$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$steps = intval(trim(fgets(STDIN)));

$path = rtrim(fgets(STDIN), "\r\n");

$result = countingValleys($steps, $path);

fwrite($fptr, $result . "\n");

fclose($fptr);
