<?php 
class Cliente {
  private $nombre;
  private $edad;

  public function __construct($nombre, $edad)
  {
    $this->setNombre($nombre);
    $this->setEdad($edad);
  }

  public function setNombre($nombre){
    if(strlen($nombre)>45){
      throw new InvalidArgumentException("Nombre muy largo");
    }
    $this->nombre=$nombre;
  }
  
  public function setEdad($edad){
    if ($edad<18) {
      throw new NoEsMayorEdad("No es mayor de edad");
    }
    $this->edad=$edad;
  }
}