<?php

namespace Repository;

include_once __DIR__ . "/AbstractRepository.php";
include_once __DIR__ . "/../PokemonEntity/Pokemon.php";

use PokemonEntity\Pokemon;

class PokemonRepository extends AbstractRepository
{
    public function __construct()
    {
        parent::__construct("db_pokemons", 'pokemon');
    }

    /**
     * @param array $array associative array reprensenting a DB row of Pokemon
     * @return Pokemon
     */
    protected function createObjectByAssocArray(array $array): object
    {
        $pokemon = new Pokemon();
        $pokemon->setId((int)$array['id']);
        $pokemon->setWeight((int)$array['weight']);
        $pokemon->setHeight((int)$array['height']);
        $pokemon->setBase_experience((int)$array['base_experience']);
        $pokemon->setHp((int)$array['hp']);
        $pokemon->setAtk((int)$array['atk']);
        $pokemon->setDef((int)$array['def']);
        $pokemon->setSpa((int)$array['spa']);
        $pokemon->setSpd((int)$array['spd']);
        $pokemon->setSpe((int)$array['spe']);
        $pokemon->setName($array['name']);
        $pokemon->setSlug($array['slug']);
        $pokemon->setId_api($array['id_api']);
        $pokemon->setName_api($array['name_api']);
        $pokemon->setIs_default((bool)$array['is_default']);
        return $pokemon;
    }
}
