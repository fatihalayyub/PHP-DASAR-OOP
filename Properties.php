<?php

require_once "data/Person.php";

$person = new Person("Eko", "Kebon Jeruk"); 
$person->name = "Eko";
$person->address = "Kebon Jeruk";

var_dump($person);

echo "Name : $person->name $person->address $person->country";

$person2 = new Person("Andi", "Kebon Kelapa");
$person2->name = "Andi";
$person2->address = "Kebon Kelapa";

var_dump($person2); 

?>