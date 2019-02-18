<?php

//------------------CLASES---------------------
class Persona{
    //Propiedades
    private $nombre;
    private $apellido1;
    private $apellido2;
    private $edad;

    //Funciones

    //Constructor
    public function __construct($nombre="",$apellido1="",$apellido2="",$edad=""){
        $this->nombre = $nombre;
        $this->apellido1=$apellido1;
        $this->apellido2=$apellido2;
        $this->edad=$edad;
    }

    public function setNombre($nombre){
        $this->nombre = $nombre;
    }

    public function getNombre(){
        return $this->nombre;
    }

    public function setApellidos($apellido1,$apellido2){
        $this->apellido1=$apellido1;
        $this->apellido2=$apellido2;
    }

    public function getApellido1(){
        return $this->apellido1;
    }

    public function getApellido2(){
        return $this->apellido2;
    }
    

    public function setEdad($edad){
        $this->edad=$edad;
    }

    public function getEdad(){
        return $this->edad;
    }

    public function imprimirCaracteristicas(){
        echo "</br></br>";
        echo "Nombre: ".$this->nombre."</br>";
        echo "Apellidos: ".$this->apellido1." ";
        echo $this->apellido2."</br>";
        echo "Edad: ".$this->edad." años";
        echo "</br></br>";
    }


    public function devolver(){
        return $this;
    }
}

//-----------------CODIGO------------------

$miguel= new Persona();
$miguel->setNombre("Miguel Angel");
$miguel->setApellidos("Vargas","Hernandez");
$miguel->setEdad(22);

echo "Nombre: ".$miguel->getNombre()."</br>";
echo "Apellido1: ".$miguel->getApellido1()."</br>";
echo "Apellido2: ".$miguel->getApellido2()."</br>";
echo "Edad: ".$miguel->getEdad()." años</br>";

$inda= new Persona("Inda", "Ape1", "Ape2", 99);
$inda->imprimirCaracteristicas();

?>