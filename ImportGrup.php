<?php

require_once "data/Conflict.php";
require_once "data/Helper.php";

use data\One\{
    conflict as conflict1,
    Dummy as dummy,
    Sample as sample,
};

$konflik = new conflict1();

$dump = new dummy();
$sampel = new sample();