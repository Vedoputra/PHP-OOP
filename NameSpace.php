<?php

require_once "data/Conflict.php";
require_once "data/Helper.php";


$conflict1 = new data\One\conflict();
$conflict2 = new data\Two\conflict();

echo Helper\APPLICATION . PHP_EOL;

Helper\Helpme();