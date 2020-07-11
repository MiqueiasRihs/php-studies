<?php
// include "inc/exemplo-01.php"; // Tenta rodar mesmo que o arquivo não exista ou esteja com erros
// com include voce pode mapear uma pasta com codigos externos e permite trazer de urls

require "inc/exemplo-01.php"; // Exige que o arquivo exista e que esteja correto
require_once "inc/exemplo-01.php"; //Traz apenas uma vez o arquivo

$resultado = somar(10, 20);
echo $resultado;

?>