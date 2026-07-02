<?php

include_once "header.php";

// ?offset=151&limit=100

$offset = 0;
if (isset($_GET['offset'])) {
    $offset = $_GET['offset'];
}

$limit = $_GET['limit'] ?? 151;

$params = [];
$filterKey = ['hp', 'atk', 'def', 'spa', 'spd', 'spe', 'weight', 'height', 'name'];
foreach ($filterKey as $key) {
    if (isset($_GET[$key])) {
        $params[$key] = $_GET[$key];
    }
}

$repository = new PokemonRepository();
$pokemons = $repository->fetchBy($params, $offset, $limit);

//$pokemons = $repository->fetchById(373);
//$firstGeneationPokemons = [$pokemons];

?>

    <div class="row">
        <?php foreach ($pokemons as $pokemon): ?>

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

