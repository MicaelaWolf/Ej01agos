<?php
class Persona
{
  private $nombre;
  private $alquiler = [];

  public function __construct($nombre, $alquiler)
  {
    $this->nombre = $nombre;
    $this->alquiler = $alquiler;
  }

  /**
   * Get the value of nombre
   */ 
  public function getNombre()
  {
    return $this->nombre;
  }
}