<?php
include __DIR__ . "/header.php";
include __DIR__ . "/PokemonRepository.php";

$id = $_GET["pokemon_id"];

$repository = new PokemonRepository();
$pokemon = $repository->fetchById($id);

?>


<div class="film d-flex align flex-column align-items-center justify-content-center">
  <h1><?= $pokemon->getName() ?></h1>
  <img src="<?= getPokemonImage($pokemon->getId()) ?>" alt="<?= $pokemon->getName() ?> movie poster">
  <p class="card-text">
    hp: <?= $pokemon->getHp() ?> |
    atk: <?= $pokemon->getAtk() ?> |
    def: <?= $pokemon->getDef() ?> |
    Spa: <?= $pokemon->getSpa() ?> |
    Spd: <?= $pokemon->getSpd() ?> |
    Spe: <?= $pokemon->getSpe() ?> |
  </p>
</div>


<?php
include __DIR__ . "/footer.php";
?>
