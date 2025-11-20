<?php

require_once "data/Person.php";

// $dito = new Person("Dito", "Citayem");
// $dito->name = "JOJO";
// $dito->sayHello("dito");

// $joko = new Person();
// $joko->name = "JOJO";
// $joko->sayHello(null);

// $dito->info();
// $joko->info();

$dito = new Person();
$dito->name = "Dito";
$dito->sayHello("Dito");

$joko = new Person();
$joko->name = "Dito";
$joko->sayHello(null);
