<?php

$nome = "Miqueias";

function teste() {

    global $nome;
    echo $nome;
    echo "<br>";
}

function teste2() {

    $nome = joao;
    echo $nome . " na função teste2"; 
}

teste();
teste2();

?>