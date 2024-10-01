<?php

    /*Un modelo en Laravel es una forma de consultar datos,
    hacia y desde las tablas de la base de datos.  
    Caracteristica -- Mapeo de objeto relacional*/

    //Clase
class Jugador{ 
    //Propiedades o atributos de una clase 
    public $nombre;
    public $posicion;
    public $numero;

    /*Los constructores son un metodo especial, lo que hace es 
    inicializar los atributos del objeto.*/

    //Constructor --- Se va a iniciarlizar o llamar auntomaticamente apenas creemos un objeto
public function __construct($nombre, $posicion, $numero){
    $this-> nombre = $nombre; // Es como si se colocara jugador1 -> nombre = "Cristiano";
    $this-> posicion = $posicion;
    $this-> numero = $numero;
    //El this reconoce el objeto y lo que hace es asignar las propiedades
}

    /*Metodos o acciones de una clase
    this hace referencia al objeto actual.
    This se encarga de encontrar cual es el obejto que esta llamando.*/
    public function entrenar(){
        echo $this -> nombre . " esta entrenando"; 
    }

    public function jugar(){
        echo $this -> nombre . " esta Jugando"; 
    }
}

    //Instancias de una Clase ---- Crear un objeto
$jugador1 = new Jugador("Cristiano Ronaldo", "Delantero", 7);

echo '<pre>';
var_dump($jugador1);
echo '</pre>';

    //Crear un objeto
$jugador2 = new Jugador("Daniel Quintero", "Arquero", 29);


echo '<pre>';
var_dump($jugador2);
echo '</pre>';

?>