<?php

$dados = ['nome' => 'Luccas', 'nota' => 10, 'idade' => 19];

extract($dados);
var_dump($nome);
var_dump($nota);
var_dump($idade);

var_dump(compact('nome', 'nota', 'idade'));
