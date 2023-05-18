<?php

$notas =[
  ['aluno' => 'Maria', 'Nota' => 10],
  ['aluno' => 'Ana', 'Nota' => 8],
  ['aluno' => 'Vinicius', 'Nota' => 9],
  ['aluno' => 'Pedro', 'Nota' => 6],
 
];


function ordenaNotas(array $nota1, array $nota2): int
{
 return $nota1['Nota'] <=> $nota2['Nota'];
};



usort($notas, 'ordenaNotas');
var_dump($notas);


$notasSimples = [10,2,4,7,6,9,1];

rsort($notasSimples); //reverse sort
var_dump(($notasSimples));

$notasAssociadas = ['Arthur'=> 10,'Pedro'=>7, 'Ana'=> 9, 'Vinicius'=>5];

asort($notasAssociadas);
var_dump($notasAssociadas);

arsort($notasAssociadas);
var_dump($notasAssociadas);

ksort($notasAssociadas);
var_dump($notasAssociadas);

krsort($notasAssociadas);
var_dump($notasAssociadas);
