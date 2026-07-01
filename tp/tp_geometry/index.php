<?php

include_once "Entity/AbstractForm.php";
include_once "Entity/Square.php";

$square = new Square();
$square->setWidth(3.7);

var_dump($square->getArea());