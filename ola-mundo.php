<?php

use function PHPSTORM_META\type;

echo "Olá Mundo!";
## Variáveis



$nome = "Arthur Candido  ";

echo $nome;


## Concatenação

$a = 5;
$b = 10;

echo $a + $b,' ';

## Imprimir tipo da variável

echo gettype($a);
echo(' ');
echo gettype($nome);
echo(' ');
echo gettype(5 / 10);
echo(' ');
echo gettype(5.3);
echo(' ');
echo gettype(true);
echo(' ');
echo gettype([]);
echo(' ');
echo gettype(new DateTime());
echo(' ');
echo gettype(null);
echo(' ');
echo gettype($a + $b);