<?php


include_once "AbstractForm.php";
include_once "Circle.php";
include_once "Rectangle.php";
include_once "Square.php";

use geometrie\Circle;
use geometrie\Rectangle;
use geometrie\Square;

function dump(mixed $data): void
{
    echo '<pre>';
    print_r($data);
    echo '</pre>';
}


dump((new Rectangle(5, 8))->getArea());
dump((new Square(7))->getArea());
dump(round((new Circle(7))->getArea(),2));

?>

<!doctype html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport"
		      content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="ie=edge">
		<title>Document</title>
	</head>
	<body>

	</body>
</html>
