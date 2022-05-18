<?php

require_once "data/managers.php";

$managers = new Managers();
$managers->name = "Abrar";
$managers->sayHello("Ana");

$vp = new VicePresident ();
$vp->name = "Ana Malikatun";
$vp->sayHello("Naufal Abrar");
?>