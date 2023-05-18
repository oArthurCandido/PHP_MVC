<?php

$alunos2021= ['Arthur','Pedro', 'Ana', 'Vinicius', 'João', 'Lima'];
$novosAlunos=['Ricardo', 'Fernando', 'Skooby'];

$alunos2022 = [...$alunos2021, ...$novosAlunos];
var_dump($alunos2022);
array_push($alunos2022, 'Alice', 'Bob', 'Charles');
var_dump($alunos2022);
$alunos2022[] = 'Macarrão';
var_dump($alunos2022);
array_unshift($alunos2022, 'Stephanie');
var_dump($alunos2022);
array_shift($alunos2022);
var_dump($alunos2022);
array_pop($alunos2022);
var_dump($alunos2022);