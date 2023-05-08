<?php

// for($number = 1; $number <= 100; $number++ ){
//   if($number % 2 != 0){
//     echo $number . PHP_EOL;
//   }
// }
// $tabuadaNumber = 5;
// echo"Tabuada do $tabuadaNumber" . PHP_EOL;

// for($i = 1; $i <= 10; $i++){
//   $result = $tabuadaNumber * $i;
//   echo "$tabuadaNumber x $i = $result " .PHP_EOL;
// }

echo"Calculadora IMC" . PHP_EOL;

$peso = 80;
$altura = 1.80;

$imc = $peso / ($altura ** 2);

echo "Seu IMC é de $imc. Você está com o IMC ";

if($imc < 18.5){
  echo "abaixo";
}else if($imc >= 18.5 && $imc <= 24.9){
  echo "dentro";
}else{
  echo "acima";
}

echo " do recomendado." . PHP_EOL;

echo "Fim do programa" . PHP_EOL;