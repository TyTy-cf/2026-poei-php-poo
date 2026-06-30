<?php

include __DIR__ . "/components/header.php";
include_once __DIR__ . "/PokemonEntity/PokemonRepository.php";

use POkemonEntity\PokemonRepository;

$repository= new PokemonRepository();

$repository->setPdo($pdo);

$pokemons = $repository->fetchAll();

dump($pokemons[0]);

$pokemon = $repository->fetchById(473);
dump($pokemon);


?>


<?php
include __DIR__ . "/components/footer.php";
?>

<?php function dump(mixed $data): void
{
    echo '<pre>';
    print_r($data);
    echo '</pre>';
}
?>
