<?php

$firstName = "Dito";
$lastName = "Aryaputra";

$anonymousFunction = function () use ($firstName, $lastName): string {
    return "Hello $firstName $lastName" . PHP_EOL;
};

$arrowFunction = fn() => "Hello $firstName $lastName" . PHP_EOL;

echo $arrowFunction();
echo $anonymousFunction();
