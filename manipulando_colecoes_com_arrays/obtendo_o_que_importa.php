<?php

$notasBimetre2 = ['Arthur'=> 10,'Pedro'=>7, 'Ana'=> 9, 'Vinicius'=>6, 'João'=> 2, 'Lima'=> 10];

$notasBimetre1 = ['Arthur'=> 10,'Pedro'=>7, 'Ana'=> 9, 'Vinicius'=>6, 'João' => 3, 'Julio' => 10, 'Mirela' => 4];

$alunosFaltantesSegundoBimestre = (array_diff_key($notasBimetre1, $notasBimetre2)); // checando quais chaves ocorreram em só um dos arrays
$alunosFaltantesPrimeiroBimestre = (array_diff_key($notasBimetre2, $notasBimetre1));
$alunosFaltantes = $alunosFaltantesPrimeiroBimestre + $alunosFaltantesSegundoBimestre;
var_dump($alunosFaltantes); 
var_dump(array_keys($alunosFaltantesSegundoBimestre)); //pega só as chaves
var_dump(array_values($alunosFaltantesSegundoBimestre)); // pega só os valores
var_dump(array_keys($alunosFaltantes)); //pega só as chaves
var_dump(array_keys($alunosFaltantesPrimeiroBimestre)); //pega só as chaves
var_dump(array_values($alunosFaltantesPrimeiroBimestre)); // pega só os valores