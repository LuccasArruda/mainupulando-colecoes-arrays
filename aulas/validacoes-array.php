<?php  

$notas = [
   'João' => 1,
   'Ricardo' => 5,
   'Zeca' => 8,
   'Geraldo' => 9
];

$numeros = [
    1,
    2,
    3,
    4,
    5,
    6,
    7,
    8
];

$nota = true;

echo eUmArray($notas) . PHP_EOL;
echo eUmArray($nota) . PHP_EOL;
echo eUmArray($numeros) . PHP_EOL;

function eUmArray($variavel){
    if (is_array($variavel)){
        echo 'Sim, é um array!';
    }
    else{
        echo 'Não, é um ' . gettype($variavel);
    }
}

var_dump(array_is_list($notas));
var_dump(array_is_list($numeros));
