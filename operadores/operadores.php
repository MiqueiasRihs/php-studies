<?php

$a = 55.0;
$b = 55;

var_dump(a > b);
var_dump(a < b);
echo "<br>";

echo "== compara valor //" . var_dump($a == $b); //== compara valor
echo "<br>";

echo "=== compara tipo //" . var_dump($a === $b); //=== compara tipo
echo "<br>";

echo "!= diferença entre valor //" . var_dump($a != $b); // valor diferente
echo "<br>";

echo "!== diferença entre tipo //" . var_dump($a !== $b); // valor diferente
echo "<br>";


?>