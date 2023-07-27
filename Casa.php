<?php 
class Casa{
  private $calle;
  private $numero;
  private $alquiler=[];

  public function __construct($calle, $numero, array $alquiler){
    $this->calle=$calle;
    $this->numero=$numero;
    $this->alquiler=$alquiler;
  }
  /**
   * Get the value of calle
   */ 
  public function getCalle()
  {
    return $this->calle;
  }
}