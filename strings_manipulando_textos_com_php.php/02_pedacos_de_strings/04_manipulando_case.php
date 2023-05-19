<?php

$email =  "Árthur@alura.com.br";
$senha = 'áéíóú';

echo "Tamanho da senha: ",strlen($senha).PHP_EOL;
echo "Tamanho da senha com MultiByte: ",mb_strlen($senha).PHP_EOL;

$posicaoDoArroba = strpos($email, '@');

$usuario = substr($email,0, $posicaoDoArroba);


echo strtoupper($usuario).PHP_EOL;
echo strtolower($usuario).PHP_EOL;
echo substr($email,$posicaoDoArroba);


