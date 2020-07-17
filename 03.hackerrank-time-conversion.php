<?php
/*
Problem: https://www.hackerrank.com/challenges/time-conversion/problem
*/


function timeConversion($s) {//recebe hora formato 12h
    $hora = date("H:i:s ", strtotime($s));//saida formato 24h

    /*O contrário seria*/
    //$date = '19:24:15'; 
    //echo date('h:i:s a', strtotime($date));

    return $hora;
}

$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$__fp = fopen("php://stdin", "r");

fscanf($__fp, "%[^\n]", $s);

$result = timeConversion($s);

fwrite($fptr, $result . "\n");

fclose($__fp);
fclose($fptr);


