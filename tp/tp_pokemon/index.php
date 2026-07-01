<?php

use Tp\tp_pokemon\Entity\PokemonRepository;

include_once "../src/Utility/utility.php";
    include "./Entity/Pokemons.php";
    include "./Entity/PokemonRepository.php";


//$pokemon = new Pokemons();
//$pokemon->setId(1);
//$pokemon->setWeight(49);
//$pokemon->setHeight(154);
//$pokemon->setBaseExperience(2512);
//$pokemon->setHp(31);
//$pokemon->setAtk(31);
//$pokemon->setDef(31);
//$pokemon->setSpatk(31);
//$pokemon->setSpdef(31);
//$pokemon->setSpd(31);
//$pokemon->setSpe(31);
//$pokemon->setName("Salamèche");
//$pokemon->setSlug("salameche");
//$pokemon->setIdApi(1);
//$pokemon->setNameApi("Salamèche");

//dump($pokemon);

$repository = new PokemonRepository();

$pokemons = $repository->fetchAll();

$pokemons2 = $repository->fetchById(0,151);

//var_dump($pokemons2);

//foreach ($pokemons as $pokemon) {
//    var_dump($pokemon);
//    die;
//}


?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Attrapez les tous !</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</head>
<body>
<div class="container">
    <div class="row row-gap-4">
        <?php foreach ($pokemons as $pokemon) : ?>
        <div class="col-md-4 d-flex align-items-stretch">
            <div class="card card-body">
                <h2><?= $pokemon->name; ?></h2>
                <p><?= "Id: ".$pokemon->id; ?></p>
                <p><?= "Weight: ".$pokemon->weight." & Height: ".$pokemon->height;  ?></p>
                <p><?= "Base Exp: ".$pokemon->base_experience; ?></p>
                <p><?= "Hp: ".$pokemon->hp." Atk: ".$pokemon->atk." Def: ".$pokemon->def." Spa: ".$pokemon->spa." Spd: ".$pokemon->spd." Spe: ".$pokemon->spe; ?></p>
<!--                <p>--><?php //= "Slug: ".$pokemon->slug; ?><!--</p>-->
<!--                <p>--><?php //= "Id API: ".$pokemon->id_api; ?><!--</p>-->
                <p><?= "Name API: ".$pokemon->name_api; ?></p>
            </div>
        </div>
        <?php endforeach;?>
    </div>
</div>
</body>
</html>
