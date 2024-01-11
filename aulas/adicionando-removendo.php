<?php

$alunos2022 = [
        'João',
        'Maria',
        'Cláudia',
        'Klaus',
        'Jefferson'
];

var_dump($alunos2022);

echo 'Adiciona valores ao fim do array: ' . PHP_EOL;
array_push($alunos2022, 'Karina', 'Lauro', 'Roberto');
var_dump($alunos2022);

echo 'Adiciona um item a partir do último: ' . PHP_EOL;
$alunos2022[] = 'Pedro';
var_dump($alunos2022);

echo 'Adiciona ao Início: ' . PHP_EOL;
array_unshift($alunos2022, 'Zeca');
var_dump($alunos2022);

echo 'Retira e retorna o primeiro valor do array: ' . PHP_EOL;
var_dump(array_shift($alunos2022));
var_dump($alunos2022);

echo 'Retira e retorna o último valor do array: ' . PHP_EOL;
var_dump(array_pop($alunos2022));
var_dump($alunos2022);