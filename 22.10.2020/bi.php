<?php

$estados = [
    'Estado 1'  => ['Pessoa saudável', 'Menos de 100 mg/dl'],
    'Estado 2'  => ['Pessoa com pré-diabetes', 'De 100 a 125 mg/dl'],
    'Estado 3'  => ['Pessoa com diabetes', 'Acima de 126 mg/dl'],
];

foreach ($estados as $indice => $lista) {
    echo $indice;
    foreach ($lista as $conteudo) {
        echo ' ' . $conteudo . '--';
    }
    echo '<br>';
}