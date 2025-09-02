<?php

require_once "data/Student.php";

$student1 = new Student();
$student1->id = "1";
$student1->name = "vedo";
$student1->value = 100;
$student1->setSample("xxxx");

var_dump($student1);