<?php

class PokemonRepository extends AbstractRepository {

    public function __construct() {
        parent::__construct("db_pokemons", "pokemon");
    }

    /**
     * @param array $array associative array reprensenting a DB row of Pokemon
     * @return Pokemon
     */
    public function createObjectByAssocArray(array $array): Pokemon
    {
        $pokemon = new Pokemon();
        $pokemon->setId((int)$array['id']);
        $pokemon->setWeight((int)$array['weight']);
        $pokemon->setHeight((int)$array['height']);
        $pokemon->setBaseExperience((int)$array['base_experience']);
        $pokemon->setHp((int) $array['hp']);
        $pokemon->setAtk((int) $array['atk']);
        $pokemon->setDef((int) $array['def']);
        $pokemon->setSpa((int) $array['spa']);
        $pokemon->setSpd((int) $array['spd']);
        $pokemon->setSpe((int) $array['spe']);
        $pokemon->setName($array['name']);
        $pokemon->setSlug($array['slug']);
        $pokemon->setIdApi($array['id_api']);
        $pokemon->setNameApi($array['name_api']);
        $pokemon->setIsDefault((bool)$array['is_default']);
        return $pokemon;
    }

}