<?php

require_once "data/Manager.php";

$eko = new Manager();
$eko->name = "eko";
$eko->SayHello("Joko");

$vp = new VicePresident();
$vp->name = "Vedo";
$vp->SayHello("Joko");