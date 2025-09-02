<?php

require_once "data/SayGoodbye.php";

use Data\Traits\{person, SayGoodbye, Sayhello};

$person = new person();
$person->Sayhello("vedo");
$person->goodBye("vedo");

$person->name = "eko";
var_dump($person);

$person->Run();