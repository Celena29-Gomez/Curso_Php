<?php

//Clase Padre
class SeleccionFutbol{
    public $id;
    public $nombre;
    public $edad;

    //Contructor
    public function __construct($id, $nombre, $edad){
        $this -> id = $id;
        $this -> nombre = $nombre;
        $this -> edad = $edad;
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
echo $jugador1 -> viajar(); //Accede el metodo de la clase padre
echo "<br>";
echo $entrenador1 -> dirigirPartido();

?>