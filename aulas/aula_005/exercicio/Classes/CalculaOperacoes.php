<?php

class CalculaOperacoes 
{
  private $numero1;
  private $numero2;

  public function __construct(int $numero1, int $numero2)
  {
    $this->numero1 = $numero1;
    $this->numero2 = $numero2;
  }

  private function soma()
  {
    $resultadoSoma = $this->numero1 + $this->numero2;
    return $resultadoSoma;
  }

  private function subtrai()
  {
    $resultadoSub = $this->numero1 - $this->numero2;
    return $resultadoSub;
  }

  private function multiplica()
  {
    $resultadoMult = $this->numero1 * $this->numero2;
    return $resultadoMult;
  }

  private function divide()
  {
    $resultadoDiv = $this->numero2 == 0 ? 'Não é possível dividir por zero!' : $this->numero1 / $this->numero2;
    return $resultadoDiv;
  }

  public function executa()
  {
    $resultadoSoma = $this->soma();
    $resultadoSub = $this->subtrai();
    $resultadoMult = $this->multiplica();
    $resultadoDiv = $this->divide();
    
    $array = [$resultadoSoma, $resultadoSub, $resultadoMult, $resultadoDiv];
    
    return $array;
  }
}