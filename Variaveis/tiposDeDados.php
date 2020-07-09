<?php
// Variaveis nao podem começar com numeros ou caracteres especiais

$nome1 = ' Miquéias';
$sobreNome = ' Rihs Oliveira';

// unset($nome1); //unset apaga a variável especificada

// isset verifica se a variavel existe
if(isset($nome1)) {
    echo "A variavel esta definida como" . $nome1;
    echo "<br>";

}

$nomeCompleto = $nome1 . $sobreNome;
echo $nomeCompleto;


?>