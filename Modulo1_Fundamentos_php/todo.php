<?php

function suma($a,$b){
    echo $a + $b;
}

suma(5,1);
//$total = suma(2,3);
//echo $total;

$nombre = "Celena";
$apellido = "Gomez";

echo "<br>";

echo "El nombre completo es: " . $nombre . " " . $apellido;

echo "<br>";

$edad = 20;

if($edad == 20){
    echo "Es mayor de edad"; 
}else if($ead <= 17){
    echo "Es menor de edad";
}else{
    echo "Usted no es lo uno, ni lo otro";
}

echo "<br>";

$numero = 5;
$i = 1;
while($i <= 10){
    echo $i++ * 5 . " ";
}

echo "<br>";


$j = 1;
do{
    echo $j . " ";
    $j++;
}
while($j <= 10);

echo "<br>";

for($num = 1; $num <= 10; $num++){
    echo $num . " ";
}

echo "<br>";

for($nume = 0; $nume <= 10; $nume++){
    if($nume % 2 == 0){
    echo $nume . " ";
    }
}

echo "<br>";

for($l = 0; $l <= 50; $l++){
    if($l % 2){
        echo $l . " ";
    }
}


echo "Ejercicio funciones ";
/*
Función calcularArea($largo, $ancho): Esta función 
debe recibir el largo y el ancho del rectángulo como 
parámetros y devolver el área.
*/

echo "<br>";

function calcularArea($largo, $ancho){
    return $largo * $ancho;
}

$largo = readline("Ingrese en largo del rectangulo: ");
$ancho = readline("Ingrese el ancho del rectangulo: ");

$area = calcularArea($largo, $ancho);

echo "El area del rectangulo es " . $area; //Ejecutarlo en la terminal
?>