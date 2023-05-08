<?php

$idade = 18;
$nome = "Arthu";

echo "Você só pode entrar se tiver 18 anos ou mais e se chamar Arthur." . PHP_EOL;

if ($idade > 18 || $idade == 18 && $nome == "Arthur") {
    echo "Você tem $idade anos. Pode entrar.";
} else {
    echo "Você tem $idade anos. Você não pode entrar.";
}