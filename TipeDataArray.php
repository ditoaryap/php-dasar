<?php

$values = [10, 9, 8, 7.5];

var_dump($values);

$names = ["Dito", "Aryaputra", "Ramadhani"];
var_dump($names);

var_dump($names[0]);

$names[0] = "Budi";
var_dump($names);

unset($names[1]);
var_dump($names);

$names[] = "Joko";
var_dump($names);

var_dump(count($names));

$dito = [
    "id" => "dito",
    "name" => "Aryaputra",
    "age" => 25,
    "address" => [
        "city" => "Depok",
        "country" => "Indonesia",
    ],
];

var_dump($dito);

var_dump($dito["name"]);
var_dump($dito["address"]["country"]);
var_dump(count($names));
