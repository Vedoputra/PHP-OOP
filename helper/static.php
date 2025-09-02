<?php

require_once "helper/MathHelper.php";

use Helper\Mathhelper;

echo Mathhelper::$name . PHP_EOL;

Mathhelper::$name ="Vedo Putra";
echo Mathhelper::$name . PHP_EOL;

$result = Mathhelper::sum(10, 10, 10, 10);
echo "result: $result" . PHP_EOL;
