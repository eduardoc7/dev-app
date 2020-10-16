<?php

class Tela
{
  private $cor;

  
  private function atribui(string $cor) 
  {
    $this->cor = $cor;
  }

  public function acessa() 
  {
    return $cor;
  }
}