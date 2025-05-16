<?php

require_once 'Elevador.php';

// Criando o elevador com capacidade de 5 pessoas
$elevador = new Elevador(5);

// Chamadas de testes considerando uma pessoa por chamada!
$elevador->chamar(3);
$elevador->chamar(7);
$elevador->chamar(1);

// Mostrando fila de chamadas pendentes
echo "\nChamadas pendentes: ";
foreach ($elevador->getChamadosPendentes() as $andar) {
    echo $andar . "o. ";
}

// Movimentação do elevador
$elevador->mover();
$elevador->mover();
$elevador->mover();
$elevador->mover(); // Tentativa de mover sem chamadas pendentes
echo "\nElevador no " . $elevador->getandarAtual() . "o. andar\n";

$elevador->chamar(5);
$elevador->chamar(1);
$elevador->chamar(0);
$elevador->chamar(3);
$elevador->chamar(7);
$elevador->chamar(5); // Tentativa de ultrapassar a capacidade do elevador

// Movimentação do elevador
while ($elevador->getChamadosPendentes()->count() > 0) {
    $elevador->mover();
}

$elevador->chamar(-1); // Tentativa de chamar um andar inexistente

// Status final
echo "\nElevador no " . $elevador->getandarAtual() . "o. andar\n";

if ($elevador->getChamadosPendentes()->count() > 0) {
    echo "\nChamadas pendentes: ";
    foreach ($elevador->getChamadosPendentes() as $andar) {
        echo $andar . "o. ";
    }
} else {
    echo "\nNão existe chamada pendente!";
}
