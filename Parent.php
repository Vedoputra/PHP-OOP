<?php

require_once "Shape.php";

use data\{Shape, Rectangle};

$shape = new Shape();
echo $shape->getCorner(). PHP_EOL;

$rectangle = new Rectangle();
echo $rectangle->getCorner(). PHP_EOL;
echo $rectangle->getParentShape(). PHP_EOL;