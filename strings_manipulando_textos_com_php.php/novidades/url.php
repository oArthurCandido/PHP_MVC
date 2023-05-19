<?php

$url = 'http://alura.com';

if(str_starts_with($url, 'https')){
  echo("é uma url segura");
}else{
  echo("Não é uma url segura");
}

echo PHP_EOL;

if(str_ends_with($url, '.br')){
  echo("É um domínio do Brasil");
}else{
  echo("Não é um domínio do Brasil!");
}
