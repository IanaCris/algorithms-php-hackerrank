<?php
/*
Problem: https://www.hackerrank.com/challenges/drawing-book/problem
*/

//Complete the pageCount function below.
function pageCount($n, $p) {
    $arrayNumPages = array();
    $aberturasBook = array();
    $virada = array();
    
    for($i=0;$i<=$n;$i++){
       $arrayNumPages[] = $i; 
    }
        
    $aberturasBook = array_chunk($arrayNumPages, 2, true);//Agrupa aberturasBook de 2 em 2 paginas
    
    //qual virada tá a pagina que eu quero?
    $numAberturas = count($aberturasBook);
    for($j=0;$j<$numAberturas;$j++) {
        if (in_array($p, $aberturasBook[$j])) { 
            //verificar do inicio ate ela
            $virada[] = $j;
            //verificar do fim ate ela
            $virada[] = $numAberturas-($j+1);
        }
    }
    
    return min($virada);//retorna a menor qtd de viradas de paginas
}

$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$stdin = fopen("php://stdin", "r");

fscanf($stdin, "%d\n", $n);

fscanf($stdin, "%d\n", $p);

$result = pageCount($n, $p);

fwrite($fptr, $result . "\n");

fclose($stdin);
fclose($fptr);
 