<?php

include_once "AbstractForm.php";
include_once "Square.php";
include_once "../../src/Utility/utility.php";
include_once "Cercle.php";
include_once "Rectangle.php";
include_once "Triangle.php";

$square = new Square(5);
dump($square);
dump($square->getArea());

$cercle = new Cercle(5);
dump($cercle);
dump($cercle->getArea());

$rectangle = new Rectangle(5, 4);
dump($rectangle);
dump($rectangle->getArea());

$triangle = new Triangle(5,4);
dump($triangle);
dump($triangle->getArea());