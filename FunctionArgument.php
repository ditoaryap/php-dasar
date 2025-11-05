<?php

function sayHello($firstName, $lastName = "DEFAULT")
{
    echo "Hello $firstName $lastName" . PHP_EOL;
}

sayHello("Dito");
sayHello("arya", "test");
