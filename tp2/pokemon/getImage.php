<?php

function getPokemonImage(int $pokemonId)
{
  $api_url = "https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/pokemon/{$pokemonId}.png";
  return $api_url;
}
