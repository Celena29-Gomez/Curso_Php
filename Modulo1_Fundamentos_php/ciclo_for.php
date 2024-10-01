<?php

/*
for(iniciar_ciclo; condicion; incremento){
    Intrucciones;
}
*/

//Crear un programa que imprima los numeros del 1 al 10
for ($i = 1; $i <= 10; $i++){
    echo $i . "<br>";
}
echo "<br>";

//Mostrar los numeros impares de 0 al 50
echo "Numeros Impares" . "<br>";
for($j = 1; $j <= 50; $j++){
    if($j % 2){
        echo $j . " ";
    }
}

echo "<br>";

//Mostrar los numeros pares de 0 al 50
echo "Numeros Pares" . "<br>";
for($par = 0; $par <= 50; $par++){
    if($par % 2 == 0){
        echo $par . " ";
    }
}

?>