<?php

require_once "data/Person.php";

$person = new Person();
$person->name = "Dito";
$person->address = "Depok";
$person->country = "Indonesia";

var_dump($person);

echo "Name = $person->name" . PHP_EOL;
echo "Name = $person->address" . PHP_EOL;
echo "Name = $person->country" . PHP_EOL;
