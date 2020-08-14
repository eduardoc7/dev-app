<?php

  function main () {
    $num = 0;
    $r = 0;
    $e = 0;

    $num = readline("informe um número \n");

    while ($num < 0) {
      $num = readline("informe um número \n");
    }

    $e = pow($num, $num);
    $r = sqrt($num);

    echo "potencia: $e \n";
    echo " A raiz do $num e: $r";

}
