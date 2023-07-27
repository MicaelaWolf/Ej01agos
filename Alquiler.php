<?php 

require_once 'Casa.php';
require_once 'Persona.php';

class Alquiler {
  private $persona;
  private $casa;
  private $duracionMeses;
  private $costo;

  public function __construct($persona, $casa, $duracionMeses, $costo)
  {
    $this->persona = $persona;
    $this->casa = $casa;
    $this->duracionMeses = $duracionMeses;
    $this->costo = $costo;
  }
  
  public static function alquilar(Persona $persona, Casa $casa){
    
  }

  public static function listar(){
    
  }
  
  /**
   * Get the value of persona
   */ 
  public function getPersona()
  {
    return $this->persona;
  }

  /**
   * Get the value of casa
   */ 
  public function getCasa()
  {
    return $this->casa;
  }

  /**
   * Get the value of costo
   */ 
  public function getCosto()
  {
    return $this->costo;
  }
}