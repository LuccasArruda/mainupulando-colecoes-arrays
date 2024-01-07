<?php  

$notas = [
   'João' => 1,
   'Ricardo' => 5,
   'Zeca' => null,
   'Geraldo' => 9,
   'Joana' => '10'
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
var_dump(array_key_exists('Ricardo', $notas));
echo 'Zeca fez a prova?' . PHP_EOL;
var_dump(isset($notas['Zeca']));
echo 'Alguém tirou 10?' . PHP_EOL;
var_dump(in_array(10, $notas));
echo 'a nota 10 é inteiro?' . PHP_EOL;
var_dump(in_array(10, $notas, true));
echo 'Quem tirou 10?' . PHP_EOL;
var_dump(array_search(10, $notas));
echo 'Alguém tirou 12?' . PHP_EOL;
var_dump(array_search(12, $notas));