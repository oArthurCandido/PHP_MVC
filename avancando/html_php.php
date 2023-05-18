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
// echo "<div class:'list', style='font-weight:bold'>";
// echo "<ul>";
// foreach($contasCorrentes as $cpf => $conta){
//   exibeConta($conta);
// }
// echo"</ul>";
// echo "</div>";
//https://www.php.net/manual/en/language.types.string.php
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Aula PHP</title>
</head>
<body>
  <h1>Conta Correntes</h1>
  <h2>
    <?php foreach($contasCorrentes as $cpf => $conta){ ?>
         <h3><?=$conta['titular'];?>  - <?= $cpf ?></h3>
         <h4>Saldo: <?= $conta['saldo']?></h4>
         <?php } ?>
  </h2>
  </h1>
  
</body>
</html>