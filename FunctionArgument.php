<?php

function sayHello($firstName, $lastName = "DEFAULT")
{
    echo "Hello $firstName $lastName" . PHP_EOL;
}

sayHello("Dito");
sayHello("arya", "test");

function sum(int $first, int $last)
{
    $total = $first + $last;
    echo "Total $first + $last = $total" . PHP_EOL;
}

sum(100, 100);
sum("100", "100");
sum(true, false);
sum([], []);
