<?php

class Pessoa
{
  public $nome;
  public $idade;
  private $RG;
  private $CPF;

  public function __construct(string $nome, int $idade, string $RG, string $CPF)
  {
    $this->nome = $nome;
    $this->idade = $idade;
    $this->RG = $RG;
    $this->CPF = $CPF;
  }
}