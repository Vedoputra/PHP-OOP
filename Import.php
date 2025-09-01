<?php

require_once "data/Conflict.php";
require_once "data/Helper.php";

use data\One\conflict;
use function Helper\Helpme;
use const Helper\APPLICATION;

$Conflict = new conflict();

Helpme();

echo APPLICATION . PHP_EOL;