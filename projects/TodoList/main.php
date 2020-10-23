<?php

require "src/classes/Todo.php";
require "src/classes/FileTodo.php";

// $tarefa = new Tarefa(0, "Teste", "Teste da classe tarefa", "22/10/2020");
// $tarefa2 = new Tarefa(1, "Teste 2", "Teste da classe tarefa 2", "23/10/2020");

// $listaTarefas = [];
// $listaTarefas[] = $tarefa;
// $listaTarefas[] = $tarefa2;

$arquivoTarefa = new FileTodo("tarefas.json");
// $arquivoTarefa->save($listaTarefas);

print_r($arquivoTarefa->read());