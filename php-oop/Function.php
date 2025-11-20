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

$dito = new Person("Dito", "Depok");
$dito->name = "Dito";
$dito->sayHello("Dito");

$joko = new Person("Joko", null);
$joko->name = "Joko";
$joko->sayHello(null);

$dito->info();
$joko->info();
