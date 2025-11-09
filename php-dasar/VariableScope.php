<?php

$name = "Dito";

function sayHello()
{
    global $name;
    echo $name . PHP_EOL;
}

sayHello();
