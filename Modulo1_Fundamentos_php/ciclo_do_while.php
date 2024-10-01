<?php

/*Ciclo do while -- La condicion se realiza despues 
de ejecutar por lo menos una vez las instrucciones que 
contiene el do.

do{
codigo a ejecutar
}
while(condicion);*/


$i = 1;

do{ //Se ejecuta independientemente de la condicion, al menos 1 vez.
    echo $i . "  "; 
    $i++;
}while($i <= 10);

echo "Fin de la instruccion";
echo "<br>";


$j = 1;
$num = 5;

do{
    echo $j++ * $num;
    echo "<br>";
}while($j <= 10);

/*
$l = 1;

do{
    echo "Te amo Angel David Serna Correa. ♥ <br>";
    $l++;
}while($l <= 100);

echo "<pre>";
echo "  ♥♥     ♥♥  \n";
echo "♥♥♥♥   ♥♥♥♥ \n";
echo "♥♥♥♥♥♥♥♥♥♥♥ \n";
echo " ♥♥♥♥♥♥♥♥♥  \n";
echo "   ♥♥♥♥♥    \n";
echo "    ♥♥♥     \n";
echo "     ♥      \n";
echo "</pre>"; 
*/

//while (true){ 
//    echo "hola"; 
//}

?>