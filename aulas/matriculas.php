<?php

$alunos2023 = [
    'João',
    'Ricardo',
    'Zeca',
    'Geraldo',
    'Joana' 
];

$novosAlunos = [
    'Renato',
    'Maria Eduarda',
    'Fernanda',
    'Solange',
    'Catarina'
];

$alunos2024 = array_merge($novosAlunos, $alunos2023);

echo 'União de arrays: ' . PHP_EOL;
var_dump($alunos2024);

//unpacking operator
//dependendo do contexto, é spread operator
echo 'União de arrays por desempacotamento:' . PHP_EOL;
$alunos2024 = [...$alunos2023, 'aaaaaaa', ...$novosAlunos];
var_dump($alunos2024);

empacotaDentro(12, 23, 24, 27, 54, 28, 30, 65);

function empacotaDentro(int ...$array){
    //..$array permite passar quantos valores eu quiser
    echo 'Exibindo números empacotados: ' . PHP_EOL;
    foreach ($array as $numero){
        echo $numero . PHP_EOL;
    }
}

//o mesmo pode ser feito ao contrário
desempacotaDentro(...[1,2,3]);

function desempacotaDentro(int $a, int $b, int $c){
    echo 'Números empacotados: ' . PHP_EOL;
    echo $a . PHP_EOL;
    echo $b . PHP_EOL;
    echo $c . PHP_EOL;
}


