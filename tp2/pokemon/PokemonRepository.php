<?php

include_once __DIR__ . "/AbstractRepository.php";

class PokemonRepository extends AbstractRepository
{
  public function __construct()
  {
    parent::__construct("db_pokemons", Pokemon::class);
  }
}
