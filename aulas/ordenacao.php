<?php

$notas = [
    10,
    9,
    8,
    7
];

$notasOrdenadas = $notas;

sort($notasOrdenadas);

echo 'Notas Decrescentes:' .PHP_EOL;
foreach($notas as $nota){
    echo $nota . PHP_EOL;
}

echo 'Notas Crescentes:' . PHP_EOL;
foreach ($notasOrdenadas as $nota) {
    echo $nota . PHP_EOL;
}
