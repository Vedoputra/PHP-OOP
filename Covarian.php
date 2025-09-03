<?php

use Data\AnimalFood;
use Data\CatShelter;
use Data\DogShelter;
use Data\food;

require_once "data/Animal.php";
require_once "data/AnimalShelter.php";
require_once "data/Food.php";

$catshelter = new CatShelter();
$cat = $catshelter->adopt("vedo");
$cat->eat(new AnimalFood);

$dogshelter = new DogShelter();
$dog = $dogshelter->adopt("putra");
$dog->eat(new food());