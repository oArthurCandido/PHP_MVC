<?php

$alunos2021= ['Arthur','Pedro', 'Ana', 'Vinicius', 'João', 'Lima'];
$novosAlunos=['Ricardo', 'Fernando', 'Skooby'];

$alunos2022 = [...$alunos2021,'Miguel', ...$novosAlunos];

var_dump($alunos2022);