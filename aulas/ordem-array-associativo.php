<?php

$notas = [
    [
        'aluno' => 'Luccas',
        'nota' => 10
    ],
    [
        'aluno' => 'Maria',
        'nota' => 8
    ],
    [
        'aluno' => 'Craudio',
        'nota' => 4
    ]
];

function ordenaNotasDecrescente(array $primeiraNota, array $segundaNota) {
    return $segundaNota['nota'] <=> $primeiraNota['nota'];
}

usort($notas, 'ordenaNotasDecrescente');
var_dump($notas);