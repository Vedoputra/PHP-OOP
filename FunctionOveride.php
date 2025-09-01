<?php

require_once "data/Manager.php";

$manajer = new Manager();
$manajer->name = "vedo";

$vp = new VicePresident();
$vp->name = "vedo";

$manajer->SayHello("Budi");
$vp->SayHello("Budi");
$vp->getParent("budi");