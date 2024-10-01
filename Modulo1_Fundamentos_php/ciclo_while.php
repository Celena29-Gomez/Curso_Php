<?php

//El ciclo while se usa cuando no conocemos el numero de veces que debera ejecutarse una instruccion 

//Realizar un progrma que imprima los numeros del 1 al 10

$i = 1;

while ($i <= 10){
    echo $i++; echo "<br>";  //i++ -- Operador de incremento
}

echo "<br>"; 

//Realizar un programa que imprima la tabla de multiplocar del 5

$j = 1;
$numero = 5;

while ($j <= 10){
    echo $j++ * $numero;  
    echo "<br>"; 
}

?>