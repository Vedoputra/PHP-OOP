<?php

require_once "data/Person.php";

$persons = new Person ("eko", "subang");
$persons -> name = "Vedo";
$persons -> address = "Denpasar";

var_dump($persons);

echo "name : $persons->name" . PHP_EOL;
echo "address : $persons->address" . PHP_EOL;
echo "Country : $persons->country" . PHP_EOL;

$persons2 = new Person ("Putra", "denpasar");
$persons2->name = "Putra";
$persons2->address = "Denpasar";


var_dump($persons2);
