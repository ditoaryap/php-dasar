<?php

require_once "data/Person.php";

$dito = new Person();
$dito->name = "JOJO";
$dito->sayHello("dito");

$joko = new Person();
$joko->name = "JOJO";
$joko->sayHello(null);

$dito->info();
$joko->info();