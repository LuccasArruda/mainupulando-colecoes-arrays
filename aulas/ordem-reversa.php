<?php

$notas = [
    'Cláudio' => 10,
    'Zeca' => 3,
    'Larissa' => 6,
    'Natália' => 8,
    'Damião' => 9
];

echo 'Mantendo Chaves:' . PHP_EOL . 'Ordem Decrescente:' . PHP_EOL;
arsort($notas);
var_dump($notas);

echo 'Ordem Crescente:' . PHP_EOL;
asort($notas);
var_dump($notas);


echo 'Ordenando por ordem de chaves:' . PHP_EOL . 'Ordem Decrescente:' . PHP_EOL;
ksort($notas);
var_dump($notas);

echo 'Ordem Crescente:' . PHP_EOL;
krsort($notas);
var_dump($notas);

rsort($notas);
echo 'Redefinição de Chaves' . PHP_EOL . 'Ordem Decrescente:' . PHP_EOL;
// foreach($notas as $nota){
//     echo $nota . PHP_EOL;
// }
var_dump($notas);

sort($notas);

echo 'Ordem Crescente:' . PHP_EOL;
var_dump($notas);
// foreach($notas as $nota){
//     echo $nota . PHP_EOL;
// }
