<?php

// importação dos arquivos
require 'Pessoa.php';

// inicializando as variáveis:
$nome = "Eduardo";
$idade = 20;
$RG = "xx.xxx.xxx-xx";
$CPF = "xxx.xxx.xxx-xx";

// instanciando as classes:
$alguemqualquer = new Pessoa($nome, $idade, $RG, $CPF);