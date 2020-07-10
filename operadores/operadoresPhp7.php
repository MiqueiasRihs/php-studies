<?php

$a = 55;
$b = 35;

//Se a for maior que b entao retorna 1
//Se b for maior que a entao retorna -1
//Se a for igual a b entao retorna 0
var_dump($a <=> $b);


$c = NULL;
$d = 100;
$e = 10;

//Retorna o primeiro valor valido de uma sequencia
echo $c ?? $d ?? $e;
?>