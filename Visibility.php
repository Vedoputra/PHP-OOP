<?php

require_once "data/Product.php";

$product = new Product("cilok", 5000);

echo $product->getName(). PHP_EOL;
echo $product->getPrice() . PHP_EOL;

$produk = new ProductDummy("bakso", 7000);
$produk->Info();