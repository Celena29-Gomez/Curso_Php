<?php

/*Los modificadores de acceso lo hemos usado en las propiedades, metodos y atributos
Public - Se puede acceder desde objeto o clase.
Protected - Se puede acceder unicamente en la clase.
Privete - Se puede acceder unicamente por la clase que lo contiene.*/

//Clase Padre
class SeleccionFutbol{
    public $id;
    private $nombre;
    public $edad;

    //Contructor
    public function __construct($id, $nombre, $edad){
        $this -> id = $id;
        $this -> nombre = $nombre;
        $this -> edad = $edad;
    }

    private function getNombre(){
        return $this -> nombre;
    }

    public function setNombre($nombre){
        $this -> nombre = $nombre;
    }

    //Metodos
    public function concentrarse(){
        echo $this -> nombre . " Esta en concentracion";
    }

    public function viajar(){
        echo $this -> nombre . " Esta viajando";
    }
}


//Clase hija
class Jugador extends SeleccionFutbol{ 
    //Propiedades o atributos de una clase 
    public $posicion;
    public $numero;

public function __construct($id, $nombre, $edad, $posicion, $numero){

    parent::__construct($id, $nombre, $edad);
    $this-> posicion = $posicion; //Los propios de la clase jugador
    $this-> numero = $numero;
}

    public function entrenar(){
        echo $this -> nombre . " esta entrenando"; 
    }

    public function jugar(){
        echo $this -> nombre . " esta Jugando"; 
    }
}

//Clase Hija
class Entrenador extends SeleccionFutbol{ 
    public $experiencia;

    public function __construct($id, $nombre, $edad, $experiencia){
        parent::__construct($id, $nombre, $edad); 
        $this-> experiencia = $experiencia;
    }

    public function dirigirEntrenamiento(){
        echo $this -> nombre . " Esta dirigiendo el entrenamiento";
    }

    public function dirigirPartido(){
        echo $this -> nombre . " Esta dirigiendo el juego";
    }
}

$jugador1 = new Jugador(123, "Cristiano", 37, "Delantero", 7);
$entrenador1 = new Entrenador(124, "Juan", 22, 10);

//Accedo desde el objeto
echo $jugador1 -> nombre; 

/*Para acceder desde la clase se utilizan los Getter y Setter
Get - Obtener un valor
Set - Modificar y asignar un valor*/

echo $jugador1 -> getNombre(); //Cristiano


/*Acceso desde la clase
echo $jugador1 -> getNombre(); //Cristiano
echo $jugador1 -> setNombre("Leonel Messi"); //Actualizar
echo $jugador1 -> getNombre(); //Leonel Messi*/

?>