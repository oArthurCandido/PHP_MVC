<?php

function sacar( $conta, float $valorASacar)
{
  if($valorASacar > $conta['saldo']){
    exibeMensagem("Você não pode sacar");
  }else{
    $conta['saldo'] -= $valorASacar;
    exibeMensagem('Saque realizado com sucesso');
  }
  return $conta;
}

function depositar( $conta, float $valorADepositar)
{
  if($valorADepositar > 0){
    $conta['saldo'] += $valorADepositar;
    exibeMensagem("Depósito de $valorADepositar realizado com sucesso");
  }else{
    exibeMensagem("Depósitos devem ser positivos!");
  }
  return $conta;
}

function exibeMensagem( $mensagem) 
{
  echo $mensagem . '<br>';
}

function titularComLetrasMaiusculas(&$conta)
{
  $conta['titular'] = mb_strtoupper($conta['titular']);
  

  return $conta;

}

function exibeConta($conta)
{
  echo  "<li>Titular: $conta[titular]. Saldo: {$conta['saldo']}</li>";
  
}