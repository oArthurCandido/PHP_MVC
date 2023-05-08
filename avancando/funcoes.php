<?php

function sacar($conta, $valorASacar){
  if($valorASacar > $conta['saldo']){
    exibeMensagem("Você não pode sacar");
  }else{
    $conta['saldo'] -= $valorASacar;
    exibeMensagem('Saque realizado com sucesso');
  }
  return $conta;
}

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

$contasCorrentes[12345678910] = sacar($contasCorrentes[12345678910],500);
$contasCorrentes[12345678912] = sacar($contasCorrentes[12345678912],500);

foreach($contasCorrentes as $cpf => $conta){
  exibeMensagem($conta['titular'].''. $conta['saldo']);
}