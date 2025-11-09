<?php

function sayHello(string $name, callable $filter)
{
    $finalName = call_user_func($filter, $name);
    echo "Hello $finalName" . PHP_EOL;
}

sayHello("Dito", "strtoupper");
sayHello("Dito", "strtolower");
sayHello("Eko", function (string $name): string {
    return strtoupper($name);
});
sayHello("Dito", fn($name) => strtoupper($name));
