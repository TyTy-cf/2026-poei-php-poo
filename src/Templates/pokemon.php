<?php

include_once "../Entity/Pokemons/Pokemons.php";
include_once "header.php";
include_once "../Repository/PokemonRepository.php";

$repository = new PokemonRepository();
$pokemons = $repository->fetchAll();
$firstGeneationPokemons = array_slice($pokemons, 0, 151);

//$pokemons = $repository->fetchById(373);
//$firstGeneationPokemons = [$pokemons];

?>

    <div class="row">
        <?php foreach ($firstGeneationPokemons as $pokemon): ?>

            <div class="col-3 g-3">
                <div class="card h-100">
                    <img src="<?= $pokemon->getImage() ?>" class="img-fluid object-fit-cover" alt="<?= $pokemon->getName() ?>">
                    <div class="card-body">
                        <h5 class="text-center"><?= $pokemon->getName() ?></h5>
                    </div>
                </div>
            </div>
        <?php endforeach ?>
    </div>


<?php
include_once __DIR__ . "/footer.php"; ?>