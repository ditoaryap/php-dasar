<?php

function foo()
{
    echo "Foo" . PHP_EOL;
}

function bar()
{
    echo "Bar" . PHP_EOL;
}

$functionYangAkanDipanggil = "foo";
@$functionYangAkanDipanggil();

$functionYangAkanDipanggil = "bar";
@$functionYangAkanDipanggil();

function sayHello(string $name, $filter)
{
    $finalName = $filter($name);
    echo "Hello $finalName" . PHP_EOL;
}

function sampleFunction(string $name): string
{
    return "Sampel $name";
}

sayHello("Dito", "sampleFunction");
sayHello("Dito", "strtoupper");
sayHello("Dito", "strtolower");
