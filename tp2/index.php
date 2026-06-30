<?php
include_once "../src/Utility/utility.php";

include_once "./Entity/Category.php";
include_once "./Entity/Product.php";

$category = new Category();
$category->setId(1);
$category->setName("Electronics");

$product = new Product();
$product->setId(1);
$product->setName("Smartphone");
$product->setPrice(699.99);
$product->setCategory($category);

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>2026 POEI PHP POO JOUR2</title>
</head>

<body>

</body>

</html>
