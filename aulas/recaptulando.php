<?php
$array = [
    'primeiro' => 1,
    'segundo' => 2
];

var_dump($array);

foreach ($array as $posicao => $numero){
    echo "conteúdo do $posicao: $numero".PHP_EOL;
}