<?php

// função isset verifica se a variável é diferente de nula


$firstName = $_GET['firstName'];
$secondName = iseet($_GET['secondName']) ? $_GET['secondName'] : 'Second name is null!';

$msg = "Welcome, $firstName $secondName";

echo $msg;