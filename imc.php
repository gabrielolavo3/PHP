<?php

$p = $_POST['peso']; // Busca a variável html com name
$a = $_POST['altura']; 

$imc = $p / ($a*$a);

echo 'O seu imc é ', round($imc,2); // Impressão formatada

?>
