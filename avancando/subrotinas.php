<?php

function exibeMensagem($mensagem) {
  echo $mensagem .PHP_EOL;
}

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

if(500> $contasCorrentes[12345678910]['saldo']){
  exibeMensagem("Você não pode sacar");
}else{
  $contasCorrentes[12345678910]['saldo'] -= 500;
  exibeMensagem('Saque realizado com sucesso');
}

if(500> $contasCorrentes[12345678912]['saldo']){
  exibeMensagem("Você não pode sacar");
}else{
  $contasCorrentes[12345678912]['saldo'] -= 500;
  exibeMensagem('Saque realizado com sucesso');
}

foreach($contasCorrentes as $cpf => $conta){
  exibeMensagem($cpf. "".$conta['titular'].''. $conta['saldo']);
}