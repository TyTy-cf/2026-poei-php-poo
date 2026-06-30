<?php

    include_once "../src/Utility/utility.php";
    include "./Entity/Pokemons.php";
    include "./pdo-poke.php";


$pokemon = new Pokemons();
$pokemon->setId(1);
$pokemon->setWeight(49);
$pokemon->setHeight(154);
$pokemon->setBaseExperience(2512);
$pokemon->setHp(31);
$pokemon->setAtk(31);
$pokemon->setDef(31);
$pokemon->setSpatk(31);
$pokemon->setSpdef(31);
$pokemon->setSpd(31);
$pokemon->setSpe(31);
$pokemon->setName("Salamèche");
$pokemon->setSlug("salameche");
$pokemon->setIdApi(1);
$pokemon->setNameApi("Salamèche");

dump($pokemon);

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Attrapez les tous !</title>
</head>
<body>

</body>
</html>
