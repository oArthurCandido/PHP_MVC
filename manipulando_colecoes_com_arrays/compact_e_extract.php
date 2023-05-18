<?php

$dados =[
  'nome'=>'Arthur',
  'idade'=>37,
  'nota'=>10,
];

extract($dados);
var_dump($nome,$idade,$nota);

var_dump(compact('nome','idade','nota'));
