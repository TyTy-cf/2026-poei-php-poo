<?php

include_once __DIR__ . "/Repository/PokemonRepository.php";

include __DIR__ . "/components/header.php";



$repository = new Repository\PokemonRepository();



$pokemons = $repository->fetchAll();
$pokemon = $repository->fetchById(473);

$fields = [
        'atk' => 150,
		'def'=> 120
];

$pokemons = $repository->fetchBy($fields,0,151);
//dump($pokemons);



?>
<div class="container">
	<div class="content">

        <?php foreach ($pokemons as $pokemon) : ?>

            <?php include __DIR__ . "/components/card.php"; ?>

        <?php endforeach; ?>
	</div>

</div>

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
