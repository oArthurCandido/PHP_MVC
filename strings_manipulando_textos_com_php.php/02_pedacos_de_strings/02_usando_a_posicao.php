<?php

$email =  "r@alura.com.br";

$posicaoDoArroba = strpos($email, '@');

echo substr($email,0, $posicaoDoArroba).PHP_EOL;
echo substr($email,$posicaoDoArroba);