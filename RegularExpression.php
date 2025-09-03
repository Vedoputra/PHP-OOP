<?php

$matches = [];
$result = preg_match_all("/edo|utra|soma|eko|joko/i" , "Vedo Putra Soma", $matches);

var_dump($matches);

$result = preg_replace("/bangsat|anjing/i", "***" , "dasar lu anjing dan bangsat");
var_dump($result);

$result = preg_split("/[\s,-]/", "kadek VEdo Putra-Soma,Raharja");
var_dump($result);