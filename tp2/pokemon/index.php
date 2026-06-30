<?php

include __DIR__ . "/Pokemon.php";
include __DIR__ . "/header.php";
include __DIR__ . "/PokemonRepository.php";

$repository = new PokemonRepository();
$pokemons = $repository->fetchAll();


$firstGeneationPokemons = array_slice($pokemons, 0, 151);
?>

<div class="row">
  <?php foreach ($firstGeneationPokemons as $pokemon): ?>
    <?php $pokemon_id = $pokemon->getId(); ?>
    <div class="col-4 g-3">
      <a href="show.php?pokemon_id=<?= $pokemon_id ?>">
        <div class="card h-100">
          <img src="<?= $pokemon->getPokemonImage($pokemon_id) ?>" class="img-fluid card-img-top object-fit-cover" style="height: 20rem; object-position: center 20%;" alt="<?= $pokemon->getName() ?>">
          <a class="delete-btn" href="delete.php?pokemon_id=<?= $pokemon_id ?>">X</a>
          <a class="edit-btn" href="edit.php?pokemon_id=<?= $pokemon_id ?>">Edit</a>

          <div class="card-body">
            <h2 class="card-title text-center"><?= $pokemon->getName() ?></h2>
            </p>
          </div>
        </div>
      </a>
    </div>
  <?php endforeach ?>
</div>


<?php
include_once __DIR__ . "/footer.php"; ?>
