<?php

require_once "data/Conflict.php";
require_once "data/Helper.php";

use data\One\conflict as conflict1;
use data\Two\conflict as conflict2;
use function Helper\Helpme as Help;
use const Helper\APPLICATION as APP;

$konflik = new conflict1();
$konflik2 = new conflict2();

Help();
echo APP . PHP_EOL;