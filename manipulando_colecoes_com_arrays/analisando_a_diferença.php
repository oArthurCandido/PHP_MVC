<?php

$notasBimetre2 = ['Arthur'=> 10,'Pedro'=>7, 'Ana'=> 9, 'Vinicius'=>6, 'João'=> 2];

$notasBimetre1 = ['Arthur'=> 10,'Pedro'=>7, 'Ana'=> 9, 'Vinicius'=>6, 'João' => 3, 'Julio' => 10];

var_dump(array_diff($notasBimetre1, $notasBimetre2));

var_dump(array_diff_key($notasBimetre1, $notasBimetre2));

var_dump(array_diff_assoc($notasBimetre1, $notasBimetre2));

$array1 = [1, 2, 3];
$array2 = [3, 4, 5];
$array3 = [1, 7, 13];

$diferenca = array_diff($array1, $array2, $array3);

var_dump($diferenca);