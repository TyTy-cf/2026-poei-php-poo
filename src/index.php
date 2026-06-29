<?php

    include_once "./Utility/utility.php";
    include_once "./Entity/Brands.php";

    $brand = new Brands();
    $brand->setId(1);
    $brand->setLabel("Ford");

    $brand2 = new Brands();
    $brand2->setId(2);
    $brand2->setLabel("Opel");

    dump($brand->getLabel());
    dump($brand2);

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
