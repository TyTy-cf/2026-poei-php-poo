<?php

include_once "Entity/AbstractForm.php";
include_once "Entity/Square.php";
include_once "Entity/Circle.php";
include_once "Entity/Rectangle.php";


$square = new Square(3.7);
$circle = new Circle(3.7);
$rectangle = new Rectangle(3.7,7.3);

var_dump($square->getArea());
echo "<br>";
var_dump($circle->getArea());
echo "<br>";
var_dump($rectangle->getArea());