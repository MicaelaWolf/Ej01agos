<?php 
class NoEsMayorEdad extends Exception {

  public function __construct($msg)
  {
    parent::__construct($msg);
  }
}