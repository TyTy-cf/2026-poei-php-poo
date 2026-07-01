<?php

include_once "../src/Utility/utility.php";
include_once "Templates/header.php";
include_once "../tp/Entity/Geometry/AbstractForm.php";
include_once "../tp/Entity/Geometry/Square.php";
include_once "../tp/Entity/Geometry/Circle.php";
include_once "../tp/Entity/Geometry/Rectengle.php";



$square = new Square(6);
$circle = new Circle(9);
$rectengle = new Rectengle(8, 5);

dump($square->getArea());
dump($circle->getArea());
dump($rectengle->getArea());

