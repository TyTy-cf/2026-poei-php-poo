<?php
include __DIR__ . "/header.php";


$id = $_GET["film_id"];

$sql = "SELECT * FROM movies WHERE id = :id";

$stmt = $pdo->prepare($sql);
$stmt->execute([
  'id' => $id
]);

$movie = $stmt->fetch(PDO::FETCH_ASSOC);



?>
<form method="post" action="edit-treatment.php?film_id=<?= $movie['id'] ?>">
  <div class=" form-group">
    <label for="title">Movie Title:</label>
    <input class="form-control" id="title" type="text" name="title" value="<?= $movie['title'] ?>">
  </div>
  <div class="form-group">

    <label for="poster_url">Poster Url:</label>
    <input class="form-control" id="poster_url" type="poster_url" name="poster_url" value="<?= $movie['poster_url'] ?>">
  </div>
  <div class="form-group">

    <label for="description">Movie Description:</label>
    <textarea class="form-control" id="description" name="description" rows="3"><?= $movie['description'] ?></textarea>
  </div>

  <button class="btn btn-primary" type="submit">submit</button>

</form>


<?php
include __DIR__ . "/footer.php";
?>
