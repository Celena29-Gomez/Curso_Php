<?php

/*Un arreglo es un mapa ordenado.
Un mapa es un tipo de dato que asocia las claves y valores.*/

//Forma 1 de declarar un arreglo
$arreglo1 = array ("Elemento1", 2, "Elemento3", 25, 5.6);

echo '<pre>'; //Formato para ver mas organizado el array
var_dump($arreglo1[1]);
echo '</pre>';


//Forma 2 de declarar un arreglo
$arreglo2 = ["Elemento1", 20, "Elemento3", "Elemento4", true, false];

echo '<pre>'; //Formato para ver mas organizado el array
var_dump($arreglo2[5]);
echo '</pre>';


//Forma 3 de declarar un arreglo --- Clave => Valor
$arreglo3 = array(
    'nombre' => 'Ema',
    'edad' => 22,
    'celular' => 12345,
    'estatura' => 1.60,
);

echo '<pre>'; //Formato para ver mas organizado el array
var_dump($arreglo3); //Antes sin en nuevo valor y sin el cambio de celular
echo '</pre>';


//Agregar Valores
$arreglo3['correo'] = 'ema@gmail.com';

//Modificar valores
$arreglo3['celular'] = 31324579;

echo '<pre>'; //Formato para ver mas organizado el array
var_dump($arreglo3); //Despues con el nuevo valor y el cambio del celular
echo '</pre>';


//Eliminar el ultimo elemento del arreglo
array_pop($arreglo3);

echo '<pre>'; //Formato para ver mas organizado el array
var_dump($arreglo3); //Se elimio el correo, ultimo elemento del arreglo
echo '</pre>';

//Encontrar valores en el arreglo
echo '<pre>'; //Formato para ver mas organizado el array
var_dump(in_array(22, $arreglo3)); //Encontrar valor
echo '</pre>';

?>