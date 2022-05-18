<?php

require_once "data/Person.php";

$abrar = new Person ("Abror", "Purworejo");
$abrar->name = "Abror";
$abrar->sayHello("Budi");

$joko = new Person ("Joko", "null");
$joko->name = "Joko";
$joko->sayHello(null);

$abrar -> info();
$joko -> info();

?>