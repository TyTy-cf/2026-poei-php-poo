<?php
$pdo = new PDO(
  'mysql:host=mariadb;dbname=db_pokemons;port=3306',
  'root',
  'root'
);

function getPokemonImage(int $pokemonId)
{
  $api_url = "https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/pokemon/{$pokemonId}.png";
  return $api_url;
}
