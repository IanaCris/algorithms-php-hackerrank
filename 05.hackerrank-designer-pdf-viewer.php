<?php
/*
Problem: https://www.hackerrank.com/challenges/designer-pdf-viewer/problem
*/

function designerPdfViewer($h, $word) {

    $alfabetoIngles = array("a","b","c","d","e","f","g","h","i","j","k","l","m","n","o","p","q","r","s","t","u","v","w","x","y","z");
    
    //saber a relacao de letra e altura
    $letraAltura = array_combine($alfabetoIngles, $h);

    //separa a string em elementos de array
    $arrayPalavra = str_split($word);
    $numLetras = count($arrayPalavra);

    $maiorAltura = 0;
    //intera cada letra da palavra 
    for ($i=0;$i<$numLetras;$i++) {
        if ($letraAltura[$arrayPalavra[$i]] > $maiorAltura) {
            $maiorAltura = $letraAltura[$arrayPalavra[$i]];
        }
    }

    //valor da area de selecao
    $areaSelecao = $numLetras * 1 * $maiorAltura;

    return $areaSelecao;
}

$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$stdin = fopen("php://stdin", "r");

fscanf($stdin, "%[^\n]", $h_temp);

$h = array_map('intval', preg_split('/ /', $h_temp, -1, PREG_SPLIT_NO_EMPTY));

$word = '';
fscanf($stdin, "%[^\n]", $word);

$result = designerPdfViewer($h, $word);

fwrite($fptr, $result . "\n");

fclose($stdin);
fclose($fptr);
