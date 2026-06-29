<?php

include_once "./Utility/utility.php";
include_once "./Entity/Brands.php";
include_once "./Entity/Categories.php";
include_once "./Entity/Listings.php";
include_once "./Entity/Models.php";
include_once "./Entity/Sellers.php";

$brand = new Brands();
$category = new Categories();
$listing = new Listings();
$model = new Models();
$seller = new Sellers();

dump($brand);
dump($category);
dump($listing);
dump($model);
dump($seller);
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>2026 POEI PHP POO</title>
</head>

<body>

</body>

</html>
