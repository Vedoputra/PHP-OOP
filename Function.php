<?php

require_once "data/Person.php";

$persons = new Person("putra", "vedo");
$persons->name = "Putra";
$persons->SayHello("Vedo");

$eko = new Person("eko", null);
$eko->name ="eko";
$eko->SayHello(null);

$persons->info();
$eko->info();