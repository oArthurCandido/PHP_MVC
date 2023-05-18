<?php

$alunos2021= ['Arthur','Pedro', 'Ana', 'Vinicius', 'João', 'Lima'];
$novosAlunos=['Ricardo', 'Fernando', 'Skooby'];

$alunos2022 = $alunos2021 + $novosAlunos;//ficar atento com esse modo
var_dump(($alunos2022));
$alunos2022 = array_merge($alunos2021, $novosAlunos);
var_dump($alunos2022);