<?php

include __DIR__ . "/Pokemon.php";
include __DIR__ . "/header.php";

$sql = "SELECT * FROM pokemon";
$stmt = $pdo->prepare($sql);
$stmt->execute();
$pokemons = $stmt->fetchALL(PDO::FETCH_CLASS, "Pokemon");

// var_dump($pokemons);
?>

<div class="row">
  <?php foreach ($pokemons as $pokemon): ?>

    <div class="col-4 g-3">
      <a href="show.php?pokemon_id=<?= $pokemon->getId() ?>">
        <div class="card h-100">
          <img src="<?= getPokemonImage($pokemon->getId()) ?>" class="card-img-top object-fit-cover" style="height: 20rem; object-position: center 20%;" alt="<?= $pokemon->getName() ?>">
          <a class="delete-btn" href="delete.php?film_id=<?= $pokemon->deleteById() ?>">X</a>
          <a class="edit-btn" href="edit.php?film_id=<?= $pokemon->editById($pokemon->getId()) ?>">Edit</a>

          <div class="card-body">
            <h5 class="card-title"><?= $pokemon->getName() ?></h5>
            <p class="card-text">Height: <?= $pokemon->getHeight() ?> | Weight: <?= $pokemon->getWeight() ?></p>
            <p class="card-text"> atk: <?= $pokemon->getAtk() ?> | hp: <?= $pokemon->getHp() ?> </p>
          </div>
        </div>
      </a>
    </div>
  <?php endforeach ?>
</div>


<?php
include_once __DIR__ . "/footer.php"; ?>
