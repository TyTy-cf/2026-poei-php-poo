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

    <div class="col-4 g-3">
      <a href="show.php?pokemon_id=<?= $pokemon->getId() ?>">
        <div class="card h-100">
          <img src="<?= getPokemonImage($pokemon->getId()) ?>" class="card-img-top object-fit-cover" style="height: 20rem; object-position: center 20%;" alt="<?= $pokemon->getName() ?>">
          <a class="delete-btn" href="delete.php?film_id=<?= $pokemon->deleteById() ?>">X</a>
          <a class="edit-btn" href="edit.php?film_id=<?= $pokemon->editById() ?>">Edit</a>

          <div class="card-body">
            <h5 class="card-title"><?= $pokemon->getName() ?></h5>
            <p class="card-text">Height: <?= $pokemon->getHeight() ?> | Weight: <?= $pokemon->getWeight() ?></p>
            <p class="card-text">
              hp: <?= $pokemon->getHp() ?> |
              atk: <?= $pokemon->getAtk() ?> |
              def: <?= $pokemon->getDef() ?> |
              Spa: <?= $pokemon->getSpa() ?> |
              Spd: <?= $pokemon->getSpd() ?> |
              Spe: <?= $pokemon->getSpe() ?>
            </p>
          </div>
        </div>
      </a>
    </div>
  <?php endforeach ?>
</div>


<?php
include_once __DIR__ . "/footer.php"; ?>
