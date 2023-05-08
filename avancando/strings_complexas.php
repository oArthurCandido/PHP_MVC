<?php

function sacar($conta, float $valorASacar)
{
  if($valorASacar > $conta['saldo']){
    exibeMensagem("Você não pode sacar");
  }else{
    $conta['saldo'] -= $valorASacar;
    exibeMensagem('Saque realizado com sucesso');
  }
  return $conta;
}

function depositar($conta, $valorADepositar)
{
  if($valorADepositar > 0){
    $conta['saldo'] += $valorADepositar;
    exibeMensagem("Depósito de $valorADepositar realizado com sucesso");
  }else{
    exibeMensagem("Depósitos devem ser positivos!");
  }
  return $conta;
}

function exibeMensagem($mensagem) 
{
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
$contasCorrentes[12345678912] = sacar($contasCorrentes[12345678912],17);
$contasCorrentes[12345678912] = depositar($contasCorrentes[12345678912],500);
$contasCorrentes[12345678912] = depositar($contasCorrentes[12345678912],-5);


foreach($contasCorrentes as $cpf => $conta){
  exibeMensagem("{$conta['titular']}, saldo: {$conta['saldo']}");
}

//https://www.php.net/manual/en/language.types.string.php