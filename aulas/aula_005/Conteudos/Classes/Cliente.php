<?php

class Cliente
{
  // visibilidade dos atributos
  protected $nome;
  private $dataNascimento;

  public function setDateNascimento($dataNascimento)
  {
    $this->dataNascimento = $dataNascimento;
  }
}