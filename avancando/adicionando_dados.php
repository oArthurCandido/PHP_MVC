<?php


$contasCorrentes = [
  12345678910=>[
  'titular' => 'Vinicius',
  'saldo' => 1000
], 12345678911=>[
  'titular' => 'Maria',
  'saldo' => 10000
],12345678912=> [
  'titular' => 'Alberto',
  'saldo' => 300
]];

$contasCorrentes[12345176913]=['titular' => 'Adalberto',
'saldo' => 30000];

foreach($contasCorrentes as $cpf => $conta){
  echo $conta['titular'].PHP_EOL;
  echo $cpf.PHP_EOL;;

}