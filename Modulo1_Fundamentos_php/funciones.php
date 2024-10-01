<?php

function saludo(){
    echo "Hola Mundo" . "<br>";
}
saludo(); //Se llama la funcion, cuantas veces queramos

/*
$numero = 5;
echo $numero . "<br>"; 
saludo();

Funcion que sume dos numeros
function suma($a,$b){
    echo $a + $b;
}
suma(22,10); */

function suma2(){ //Funcion sin parametro
    $num1 = 1;
    $num2 = 2;

    echo $num1 + $num2;
}
suma2();

?>