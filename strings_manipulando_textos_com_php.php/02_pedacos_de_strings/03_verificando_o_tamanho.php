<?php

$email =  "r@alura.com.br";
$senha = '123456';

echo "Tamanho da senha: ",strlen($senha).PHP_EOL;

$posicaoDoArroba = strpos($email, '@');

echo substr($email,0, $posicaoDoArroba).PHP_EOL;
echo substr($email,$posicaoDoArroba);