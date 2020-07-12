<?php

$pessoas = array();

array_push($pessoas, array(
    'nome' => 'Joao',
    'idade' => 20
));

array_push($pessoas, array(
    'nome' => 'Miqueias',
    'idade' => 22
));

echo json_encode($pessoas);


?>