<?php
/*
function saludo($nombre){
    echo "Hola " . $nombre . ", eres una gra programador." . "<br>";
}
saludo("Celena");
saludo("Angel");

function operaciones($a,$b,){
    echo "La suma es: " . $a + $b . "<br>" . "La resta es: " . $a - $b; 
}
operaciones(5,2);
*/


function operaciones2($num1, $num2, $operacion){
    $resultado = 0;

    if ($operacion == "Sumar" ){
        $resultado = $num1 + $num2;
    }else if ($operacion == "Restar"){
        $resultado = $num1 - $num2;
    }else if ($operacion == "Multiplicar"){
        $resultado = $num1 * $num2;
    }else if ($operacion == "Dividir"){
        $resultado = $num1 / $num2;
    }else{
        echo "Error, no se reconoce la operacion";
    }
    return $resultado;
}
$imprimir = operaciones2(5,2,"Sumar");
echo $imprimir;
?>