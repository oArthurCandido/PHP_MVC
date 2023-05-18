<?php

$notasAssociadas = ['Arthur'=> 10,'Pedro'=>7, 'Ana'=> 9, 'Vinicius'=>null];

var_dump (array_key_exists('Vinicius', $notasAssociadas));
var_dump(isset( $notasAssociadas['Arthur']));
var_dump(in_array(2, $notasAssociadas));

$nota = 10;
echo("Quem tirou $nota?").PHP_EOL;
echo array_search($nota, $notasAssociadas);