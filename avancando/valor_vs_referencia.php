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


foreach($contasCorrentes as $cpf => $conta){
  exibeMensagem("{$conta['titular']}, saldo: {$conta['saldo']}");
}

//https://www.php.net/manual/en/language.types.string.php