<?php


$array = [
    "firstname" => "Kadek",
    "middlename" => "Vedo",
    "lastname" => "Putra",
];

$object = (object)$array;
var_dump($object);

echo "FirtName : $object->firstname" . PHP_EOL;
echo "middlename : $object->middlename" . PHP_EOL;
echo "Lastname : $object->lastname" . PHP_EOL;

$array1 = (array)$object;
var_dump($array1);

require_once "data/Person.php";

$person = new Person ("Vedo", "tabanan");
var_dump($person);

$array2 = (array)$person;
var_dump($array2);