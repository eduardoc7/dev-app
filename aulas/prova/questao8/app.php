<?php

// importação dos arquivos:
require 'Pessoa.php';
require 'Imc.php';

// inicializando as variáveis:
$nome = 'Eduardo';
$peso = 555.5;
$altura = 555.5;

// instaciando os objetos:
$umaPessoa = new Pessoa($nome, $peso, $altura);
$imc = new Imc($umaPessoa);

// calculando o imc:
$resultado = $imc->calculaimc();

// mostrando o resultado:
echo "O IMC é: $resultado";