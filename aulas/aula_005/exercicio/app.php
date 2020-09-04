<?php

// importação dos arquivos:
require 'Classes/CalculaOperacoes.php';

// lendo os valores:
$numero1 = $_GET['numero1'];
$numero2 = $_GET['numero2'];

// verificando os valores:
$numero1 = $_GET['numero1'] ?? 0;
$numero2 = $_GET['numero2'] ?? 0;

// instânciando objeto:
$calcula = new CalculaOperacoes($numero1, $numero2);

// acessando o método dentro da classe:
$resultado = $calcula->executa();

// mostrando para o usuário os resultados:
echo '<pre>';
if($numero1 === 0 and $numero2 === 0) {
  echo 'Aguardando os argumentos pela URL via método GET...';
} else {
  echo "A SOMA entre $numero1 e $numero2 é: $resultado[0] </br> </br>";
  echo "A SUBTRAÇÃO entre $numero1 e $numero2 é: $resultado[1] </br> </br>";
  echo "A MULTIPLICAÇÃO entre $numero1 e $numero2 é: $resultado[2] </br> </br>";
  echo "A DIVISÃO entre $numero1 e $numero2 é: $resultado[3] </br> </br>";
}
echo '</pre>';