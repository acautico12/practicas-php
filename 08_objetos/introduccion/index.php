<?php

class Coche{
    //Propiedades o Variables
    private $color;

    //Métodos o funciones
    public function getColor()
    {
       // echo "Estoy en el método getColor";
        echo $this->color;
    }

    public function setColor($color){
        $this->color=$color;
    }
}


//------------------------------------------

//Creamos una instancia de la clase Coche
$miCoche = new Coche();
$miCoche->setColor("rojo");
$miCoche->getColor();

?>