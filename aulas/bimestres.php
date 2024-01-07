<?php

$primeiroBimestre = [
    'João' => 1,
    'Ricardo' => 6,
    'Geraldo' => 9,
    'Joana' => 10
];

$segundoBimestre = [
    'João' => 1,
    'Ricardo' => 5,
    'Geraldo' => 10,
];

echo 'Diferenças de Array (valores):' . PHP_EOL;
var_dump(array_diff($primeiroBimestre, $segundoBimestre));
echo 'Diferenças de Array (chaves):' . PHP_EOL;
var_dump(array_diff_key($primeiroBimestre, $segundoBimestre));
echo 'Diferenças de Array (chaves e valores): ' . PHP_EOL;
var_dump(array_diff_assoc($primeiroBimestre, $segundoBimestre)); 

$alunosFaltantes = array_diff_key($primeiroBimestre, $segundoBimestre);
$nomeAlunosFaltantes = array_keys($alunosFaltantes);
echo 'Alunos Faltantes: ' . PHP_EOL;
var_dump($nomeAlunosFaltantes); 
$notasAlunosFaltantes = array_values($alunosFaltantes);
echo 'Notas (primeiro bimestre) dos alunos faltantes: ' . PHP_EOL;
var_dump($notasAlunosFaltantes);

echo 'Transformando chaves em valores e valores em chaves:' . PHP_EOL;
var_dump(array_combine($notasAlunosFaltantes, $nomeAlunosFaltantes));
echo 'Invertendo chaves e valores de um array:' . PHP_EOL;
var_dump(array_flip($nomeAlunosFaltantes));