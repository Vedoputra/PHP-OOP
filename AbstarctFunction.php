<?php

require_once "data/Animal.php";

use Data\{Animal, Cat, Dog};

$cat = new Cat();
$cat->name = "Vedo";
$cat->run();

$dog = new Dog();
$dog->name = "Putra";
$dog->run();