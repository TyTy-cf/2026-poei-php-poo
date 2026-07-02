<?php

include_once "header.php";

$circle = new Circle(5);
$square = new Square(8.92);
$rectangle = new Rectangle(8.92, 8.05);

?>

<ul class="list-unstyled">
    <li>Aire d'un cercle de rayon <?= $circle->getRadius(); ?> est : <?= $circle->getArea(); ?></li>
    <li>Aire d'un carré de côté <?= $square->getWidth(); ?> est : <?= $square->getArea(); ?></li>
    <li>Aire d'un rectangle de côté <?= $rectangle->getWidth(); ?> et <?= $rectangle->getHeight(); ?> est : <?= $rectangle->getArea(); ?></li>
</ul>

<?php
include_once __DIR__ . "/footer.php"; ?>