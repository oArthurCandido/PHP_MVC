<?php

$notas =[
  ['aluno' => 'Maria', 'Nota' => 10],
  ['aluno' => 'Ana', 'Nota' => 8],
  ['aluno' => 'Vinicius', 'Nota' => 9],
  ['aluno' => 'Pedro', 'Nota' => 6],
 
];


function ordenaNotas(array $nota1, array $nota2): int
{
  if($nota1['Nota'] > $nota2['Nota']){
    return -1;
  }
  if($nota2['Nota'] > $nota1['Nota']){
        return 1;
  }
  return 0;
};

function ordenaNomes(array $nome1, array $nome2): int
{
  if($nome1['aluno'] > $nome2['aluno']){
    return 1;
  }
  if($nome2['aluno'] > $nome1['aluno']){
        return -1;
  }
  return 0;
}

usort($notas, 'ordenaNomes');
var_dump($notas);


