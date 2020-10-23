<?php

class FileTodo
{
  private $caminho;

  public function __construct(string $caminho)
  {
    $this->caminho = $caminho;
  }

  public function save(array $tarefas)
  {
    $dataTarefas = [];
    $cont = 1;
    foreach ($tarefas as $key => $tarefa) 
    {
      $arr['id'] = $cont++;
      $arr['nome'] = $tarefa->getNome();
      $arr['descricao'] = $tarefa->getDescricao();
      $arr['dataLimite'] = $tarefa->getDataLimite();
      $arr['status'] = $tarefa->getStatus();
      $dataTarefas[] = $arr;
    }    

    $jsonTarefas = json_encode($dataTarefas); 
    file_put_contents($this->caminho, $jsonTarefas);
  }

  public function read()
  {
    $jsonTarefas = json_decode(file_get_contents($this->caminho));
    $dataTarefas = [];
    foreach ($jsonTarefas as $key => $obj) 
    {
      $t = new Todo($obj->status, $obj->nome, $obj->descricao, $obj->dataLimite);
      $t->setId($obj->id);
      $dataTarefas[] = $t;
    }
    
    return $dataTarefas;
  }
}