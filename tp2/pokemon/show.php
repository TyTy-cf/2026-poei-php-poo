<?php
include __DIR__ . "/header.php";
include __DIR__ . "/PokemonRepository.php";
include __DIR__ . "/Pokemon.php";

$id = $_GET["pokemon_id"];

$repository = new PokemonRepository();
$pokemon = $repository->fetchById($id);

print_r($pokemon);
?>


<div class="film d-flex align flex-column align-items-center justify-content-center">
  <h1><?= $pokemon->getName() ?></h1>
  <img src="<?= $pokemon->getPokemonImage($pokemon->getId()) ?>" alt="<?= $pokemon->getName() ?> img" class="img-fluid" style="max-width: 30rem; object-fit: cover; object-position: center 20%;">
  <p class="card-text">
    hp: <?= $pokemon->getHp() ?> |
    atk: <?= $pokemon->getAtk() ?> |
    def: <?= $pokemon->getDef() ?> |
    Spa: <?= $pokemon->getSpa() ?> |
    Spd: <?= $pokemon->getSpd() ?> |
    Spe: <?= $pokemon->getSpe() ?>
  </p>
</div>


<?php
include __DIR__ . "/footer.php";
?>
