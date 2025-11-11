<?php

require_once "data/Person.php";

$person = new Person();
$person->name = "Dito";
$person->address = "Depok";
// $person->country = "Indonesia";

var_dump($person);

echo "Name = $person->name" . PHP_EOL;
echo "Name = $person->address" . PHP_EOL;
echo "Name = $person->country" . PHP_EOL;

$person2 = new Person();
$person2->name = "Aji";
$person2->address = "asdasd";
// $person2->country = "zxccbxvvcb";

var_dump($person2);

// error
// $person2->name = [];
