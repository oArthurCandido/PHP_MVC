<?php

require 'funcoes_separadas.php';

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

titularComLetrasMaiusculas($contasCorrentes[12345678910]);

unset($contasCorrentes[12345678911]);


foreach($contasCorrentes as $cpf => $conta){
  ['titular' => $titular, 'saldo' => $saldo] = $conta;
  exibeMensagem("$cpf, {$titular}, saldo: {$saldo}");
}

//https://www.php.net/manual/en/language.types.string.php