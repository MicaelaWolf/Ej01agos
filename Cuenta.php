<?php

class Cuenta {
  private $saldo;
  private $monto;

  public function __construct($saldo, $monto)
  {
    $this->saldo = $saldo;
    $this->monto = $monto;
  }

  public function depositar($monto) : void {
    
  }

  public function retirar($monto){
    
  }
}