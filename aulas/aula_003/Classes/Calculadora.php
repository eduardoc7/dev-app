<?php
// classe Calculadora

class Operacao2 
{
  // atributos
  public $numero1;
  public $numero2;
  public $resultado;
  public $operacao;

  // metódos
  public function __construct($numero1, $numero2, $operacao)
  {
    $this->numero1 = $numero1;
    $this->numero2 = $numero2;
    $this->operacao = $operacao;
  }
}