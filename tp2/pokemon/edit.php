<?php
include __DIR__ . "/header.php";

$id = $_GET["pokemon_id"];

$repository = new PokemonRepository();
$pokemon = $repository->fetchById($id);

$id = $pokemon->getId();
$name = $pokemon->getName();
$poster_url = $pokemon->getPokemonImage($id);

?>
<form method="post" action="edit-treatment.php?pokemon_id=<?= $id ?>">
  <div class=" form-group">
    <label for="name">Movie name:</label>
    <input class="form-control" id="name" type="text" name="name" value="<?= $name ?>">
  </div>
  <div class="form-group">

    <label for="poster_url">Poster Url:</label>
    <input class="form-control" id="poster_url" type="poster_url" name="poster_url" value="<?= "ede" ?>">
  </div>
  <div class="form-group">

    <label for="description">Movie Description:</label>
    <textarea class="form-control" id="description" name="description" rows="3"><?="dede" ?></textarea>
  </div>

  <button class="btn btn-primary" type="submit">submit</button>

</form>


<?php
include __DIR__ . "/footer.php";
?>
