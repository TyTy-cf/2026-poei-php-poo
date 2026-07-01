<?php
include __DIR__ . "/header.php";
include __DIR__ . "/PokemonRepository.php";
include __DIR__ . "/Pokemon.php";

$id = $_GET["pokemon_id"];

$repository = new PokemonRepository();
$pokemon = $repository->fetchById($id);

?>


<div class="film d-flex align flex-column align-items-center justify-content-center">
  <h1><?= $pokemon->getName() ?></h1>
  <img src="<?= $pokemon->getPokemonImage($pokemon->getId()) ?>" alt="<?= $pokemon->getName() ?> img" class="img-fluid" style="max-width: 30rem; object-fit: cover; object-position: center 20%;">
  <div class="progress">
    <div class="progress-bar" role="progressbar" aria-valuenow="<?= $pokemon->getHp() ?>" aria-valuemin="0" aria-valuemax="255">hp:</div>
  </div>
  <div class="progress">
    <div class="progress-bar" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="255">atk:</div>
  </div>
  <div class="progress">
    <div class="progress-bar" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="255">def:</div>
  </div>
  <div class="progress">
    <div class="progress-bar" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="255">spa:</div>
  </div>
  <div class="progress">
    <div class="progress-bar" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="255">spd:</div>
  </div>
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
