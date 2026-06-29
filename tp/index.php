<?php

    include_once "../src/Utility/utility.php";
    include_once"../tp/Entity/Brands.php";

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>2026 POEI PHP POO</title>
    </head>
    <body>
   <?php $brando = new Brands();
    $brando->setId(1);
    $brando->setLabel("Toyota");
    $brando->setDescription("Super tuture");
    dump($brando); ?>
    </body>
</html>
