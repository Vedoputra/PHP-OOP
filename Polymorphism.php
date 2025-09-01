<?php

require_once "data/Programmer.php";


$company = new Company();
$company->programmer = new Programmer("vedo");
var_dump($company);
$company->programmer = new backend("vedo");
var_dump($company);
$company->programmer = new Frontend("vedo");
var_dump($company);


SayhelloProgrammer(new Programmer("vedo"));
SayhelloProgrammer(new backend("vedo"));
SayhelloProgrammer((new Frontend("vedo")));
