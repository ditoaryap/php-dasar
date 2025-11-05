<?php

$first = [
    "first_name" => "Dito",
];

$last = [
    "last_name" => "Aryaputra",
];

$full = $first + $last;
var_dump($full);

$a = [
    "first_name" => "Dito",
    "last_name" => "Aryaputra",
];

$b = [
    "last_name" => "Aryaputra",
    "first_name" => "Dito",
];

var_dump($a == $b);
var_dump($a === $b);
