<?php

$json = '[
    {
      "nome": "Joao",
      "idade": 20
    },
    {
      "nome": "Miqueias",
      "idade": 22
    }
  ]';

$data = json_decode($json, true);

var_dump($data);

//json_decode tranforma o json em array se for chamado com true, sem o true ele se torna objeto

?>