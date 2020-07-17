<?php
/*
Counter game
Louise and Richard have developed a numbers game. They pick a number and check to see if it is a power of . If it is, they divide it by . If not, they reduce it by the next lower number which is a power of . Whoever reduces the number to  wins the game. Louise always starts.

Given an initial value, determine who wins the game.

As an example, let the initial value . It's Louise's turn so she first determines that  is not a power of . The next lower power of  is , so she subtracts that from  and passes  to Richard.  is a power of , so Richard divides it by  and passes  to Louise. Likewise,  is a power so she divides it by  and reaches . She wins the game.

Update If they initially set counter to , Richard wins. Louise cannot make a move so she loses.

Function Description

Complete the counterGame function in the editor below. It should return the winner's name, either Richard or Louise.

counterGame has the following parameter(s):

n: an integer to initialize the game counter
Input Format

The first line contains an integer , the number of testcases.
Each of the next  lines contains an integer , the initial value for the game.

Constraints

Output Format

For each test case, print the winner's name on a new line in the form Louise or Richard.

Sample Input 0

1
6
Sample Output 0

Richard
Explanation 0

6 is not a power of 2 so Louise reduces it by the largest power of 2 less than 6: 6 - 4 = 2.
2 is a power of 2 so Richard divides by 2 to get 1 and wins the game.
*/

function Log2($x) 
{ 
    return (log10($x) /  
            log10(2)); 
}

function isPowOf2($n){
    if(($n & ($n - 1)) == 0){
        return true;
    } else {
        return false;
    }
}

function findJogadas($array_jogadas = array()) {

    $ultima_jogada = end($array_jogadas);

    if (isPowOf2($ultima_jogada)) {//se é potencia de 2, entao divide por 2
        array_push($array_jogadas, $ultima_jogada/2);
    } else {//senão subtrai dele a potencia de 2 inferior ao numero informado
        $expoenteInferior = intval(Log2($ultima_jogada)) - 1;
        $potenciaMenor = pow(2, $expoenteInferior);

        array_push($array_jogadas, ($ultima_jogada - $potenciaMenor));
    }

    if (end($array_jogadas) == 1) {
        return count($array_jogadas);
    } else {
        return findJogadas($array_jogadas);
    }
}

// Complete the counterGame function below.
function counterGame($n) {
    $inicial_jogadas = array();
    $resultado = "";

    $inicial_jogadas[] = $n;

    $total_jogadas = findJogadas($inicial_jogadas);
      
    //ganha que reduzir a 1
    //louse é a primeira, num impar, Richard par
    if (($total_jogadas-1) % 2 == 0) { //par
        $resultado .= "Louise";
    } else {
        $resultado .= "Richard";
    }


    return $resultado;
}

$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$stdin = fopen("php://stdin", "r");

fscanf($stdin, "%d\n", $t);

for ($t_itr = 0; $t_itr < $t; $t_itr++) {
    fscanf($stdin, "%ld\n", $n);

    $result = counterGame($n);

    fwrite($fptr, $result . "\n");
}

fclose($stdin);
fclose($fptr);
