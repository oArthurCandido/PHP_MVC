<?php

$notasAssociadas = ['Arthur'=> 10,'Pedro'=>7, 'Ana'=> 9, 'Vinicius'=>5];
$notasSimples = [10,2,4,7,6,9,1];
$array = ['primeiro', 1 => 'segundo', 'terceiro'];
$atual = $array;



if(is_array($atual)){
  echo('É um array!').PHP_EOL;
}
else{
  echo('Não é um array!').PHP_EOL;
}

if(array_is_list($atual)){
  echo('É uma lista sequencial');
}
else{
  echo('Não é uma lista sequencial');
}

