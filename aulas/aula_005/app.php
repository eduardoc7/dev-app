<?php

// importação dos arquivos:
require 'Classes/Cliente.php';
require 'Classes/ClienteFisico.php';
require 'Classes/ClienteJuridico.php';
  

// instânciando os objetos
$cliente = new Cliente();
$clienteFisico = new ClienteFisico();
$clienteJuridico = new ClienteJuridico('545645456');


//setando o valor 
$cliente->setDateNascimento("01-01-2000");


// debugando os conteúdos
// pre = tag do html utilizada pra melhor visualização do php
echo '<pre>';
var_dump($cliente);
var_dump($clienteFisico);
var_dump($clienteJuridico);
echo '</pre>';
