<?php

include_once "../Utility/utility.php";
include_once "../Entity/Pokemons/Pokemons.php";
include_once "AbstractRepository.php";

class PokemonRepository extends AbstractRepository
{

    public function __construct()
    {
        parent::__construct("db_pokemons");
    }


    /**
     * @return array<Pokemon>
     */
    public function fetchAll(): array
    {
        $sql = "SELECT * FROM pokemon;";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute();
        $assocArray = $stmt->fetchAll(PDO::FETCH_ASSOC);

        $pokemons = [];
        foreach ($assocArray as $row) {
            $pokemons[] = $this->createObjectByAssocArray($row);
        }

        return $pokemons;
    }

    /**
     * @return array<Pokemon>
     */
    public function fetchBy(int $offset, int $limit): array
    {
        $sql = "SELECT * FROM pokemon LIMIT ?, ?;";
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindValue(1, $offset, PDO::PARAM_INT);
        $stmt->bindValue(2, $limit, PDO::PARAM_INT);
        $stmt->execute();
        $assocArray = $stmt->fetchAll(PDO::FETCH_ASSOC);

        $pokemons = [];
        foreach ($assocArray as $row) {
            $pokemons[] = $this->createObjectByAssocArray($row);
        }

        return $pokemons;
    }

    /**
     * @return Pokemon
     */

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