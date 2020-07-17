<?php
function ordenarPilha($vetor){
  $tamanho_vetor = count($vetor);

  for($i=0; $i<$tamanho_vetor; $i++){
      for($f=$i+1; $f<$tamanho_vetor; $f++){
          if($vetor[$i] > $vetor[$f]){
              $temporaria = $vetor[$i];
              $vetor[$i] = $vetor[$f];
              $vetor[$f] = $temporaria;
          }
      }
  }

  return $vetor;
}

$pilha = [40,5,16,1,28,10,1];


print_r(ordenarPilha($pilha));