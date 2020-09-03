<?php

$numero = $_GET['numero'];

function parOuImpar($numero) {
  if($numero % 2 == 0) {
    return 'É par';
  } else {
	return 'É impar';
  }
}

$resultado = parOuImpar($numero);

echo "O número $numero é $resultado.";