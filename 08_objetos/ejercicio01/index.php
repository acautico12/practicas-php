<?php

//------------------CLASES---------------------
class Persona{
    //Propiedades
    private $nombre;
    private $apellido1;
    private $apellido2;
    private $edad;

    //Funciones
    public function __construct($nombre="",$apellido1="",$apellido2="",$edad=""){
        $this->nombre = $nombre;
        $this->apellido1=$apellido1;
        $this->apellido2=$apellido2;
        $this->edad=$edad;
    }

    public function setNombre($nombre){
        $this->nombre = $nombre;
    }

    public function setApellidos($apellido1,$apellido2){
        $this->apellido1=$apellido1;
        $this->apellido2=$apellido2;
    }

    public function setEdad($edad){
        $this->edad=$edad;
    }

    public function devolverValores(){
        echo "Nombre: ".$this->nombre."</br>";
        echo "Apellidos: ".$this->apellido1." ";
        echo $this->apellido2."</br>";
        echo "Edad: ".$this->edad." años";
        echo "</br></br>";
    }
}

//-----------------CODIGO------------------

$miguel= new Persona();
$miguel->setNombre("Miguel Angel");
$miguel->setApellidos("Vargas","Hernandez");
$miguel->setEdad(22);
$miguel->devolverValores();

$inda= new Persona("Inda", "Ape1", "Ape2", 99);
$inda->devolverValores();

?>