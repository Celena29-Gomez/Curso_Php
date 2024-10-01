<?php
$dia = "Esta lloviendo";

if ($dia == "Esta lloviendo"){
    echo "Debe quedarse en casa";
}else{ //Else es opcional. No puede haber mas de dos else, se deberia hacer con if anidados. 
    echo "Puede salir";
}
echo '<br>';

/*
Realizar un programa que envie un mensaje si este contiene menos de 100 letras, 
caso contrario que arroje un mensaje de error.
*/


$total_letras = strlen("Hola. ¿Como estas? ¿Que haces?"); //strlen --- Devuelve la longitud de esta cadena

if ($total_letras < 100){
    echo "El mensaje fue enviado exitosamente";
}else{
    echo "Este mensaje no se pudo enviar porque tiene " . $total_letras . " letras";
}

/*
Creafr un programa que indique si los habitantes hablan español u otro idioma
*/

?>