<?php
/*
Realice un programa que imprima cual es tu color favorito. 
mostrar un ejemplo con if-else y con switch.

PRIMERA OPCION:

$color_favorito = "Verde";

if ($color_favorito == "Azul"){ //or "Verde"
    echo "Tu color favorito es: " . $color_favorito;
}else if ($color_favorito == "Rojo"){
    echo "Tu color favorito es: " . $color_favorito;
}else if ($color_favorito == "Rosado"){
    echo "Tu color favorito es: " . $color_favorito;
}else if ($color_favorito == "Morado"){
    echo "Tu color favorito es: " . $color_favorito;
}else{
    echo "No se ha encontrado este color";
}*/


$color_favorito = "Verde";

switch($color_favorito){
    case "Azul":
        echo "Tu color favorito es: " . $color_favorito;
        break; //Se detiene la ejecucion
    case "Rojo":
        echo "Tu color favorito es: " . $color_favorito;
        break;
    case "Rosado":
        echo "Tu color favorito es: " . $color_favorito;
        break;
    case "Morado":
        echo "Tu color favorito es: " . $color_favorito;
        break;
    default: //Si no es ninguno de los casos anteriores por defector se ejecutara eso.
        echo "No se ha encontrado este color";
}

?>