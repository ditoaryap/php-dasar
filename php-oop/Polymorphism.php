<?php

require_once "data/Programmer.php";

$company = new Company();
$company->programmer = new Programmer("Dito");
var_dump($company);

$company->programmer = new BackendProgrammer("Dito");
var_dump($company);

$company->programmer = new FrontendProgrammer("Dito");
var_dump($company);