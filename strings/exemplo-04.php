<?php

$frase = "A repetição é mãe da retenção";
$palavra = "mãe";
$q = strpos($frase, $palavra);

// Extrai o texto que vem antes do indice especificado
$texto = substr($frase, 0, $q);
var_dump($texto);

$texto2 = substr($frase, $q + strlen($palavra), strlen($frase));
var_dump($texto2);

?>