<?php

/*Para que un alumno gane una asignatura debe sacar 
mas de 3 en la nota definitiva de lo contrario pierde

$nota = 4;

if ($nota > 4){
    echo "Usted gano la asignatura";
}else{
    echo "Usted perdio la asignatura";
}*/


$nota = 4;

echo($nota > 4  ? "Usted gano la asignatura" : "Usted perdio la asignatura");

?>