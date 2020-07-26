<?php
/*
Dado uma lista de compras feitas por clientes de uma determinada loja. 
Essa loja busca implementar um programa de fidelidade, onde irá premiar o cliente que tem mais compras feitas em sequência.
Espera-se saber qual dos clientes ganharia a premiação.
Entrada: $listaCompras = [1, 1, 1, 2, 2, 1, 3, 3, 2, 2, 2, 2, 2, 1, 1];
Saída: Cliente 2 fez mais compras em sequencia.
*/

function fidelizacaoClientes($lista = array()) {
  $totalCompras = count($lista);
  $clienteCompras = array();

  /*Inicia o numero de compras por cliente*/
  $idsClientes = array_values(array_unique($lista));
  $countClientes = count($idsClientes);
  for($j=0;$j<$countClientes;$j++) {
    $clienteCompras[$idsClientes[$j]] = 0;
  }
  /**************************************/


  for ($i=0;$i<$totalCompras;$i++) {
    $numCompras = 1;    
    for ($f=$i+1;$f<$totalCompras;$f++) {
      if ($lista[$i] == $lista[$f]) {
        $numCompras++;
      } else {        
        break;
      }
    }
    
    if ($numCompras > $clienteCompras[$lista[$i]]) {
      $clienteCompras[$lista[$i]] = $numCompras;
    }    
    
  } 
  
  //Pode existir mais de um cliente com maiores compras em sequencia
  $clientesMaisCompras = array_keys($clienteCompras, max($clienteCompras));


  $listaClientesFidelizados = implode(",", $clientesMaisCompras);
  $retorno = "Os clientes com mais compras em sequencia: ".$listaClientesFidelizados;

 
  return $retorno; 
}


$listaCompras = [1, 1, 1, 2, 2, 1, 3, 3, 2, 2, 2, 2, 2, 1, 1];
echo fidelizacaoClientes($listaCompras);
?>