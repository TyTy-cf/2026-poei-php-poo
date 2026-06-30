<?php

include_once "../Utility/utility.php";
include_once "../Entity/Pokemons/Pokemons.php";

class PokemonRepository
{

    private PDO $pdo;

    public function __construct()
    {
        $this->pdo = new PDO(
            "mysql:host=mariadb;dbname=db_pokemons;port=3306",
            "root",
            "root"
        );
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
            $pokemons[] = $this->createPokemonByAssocArray($row);
        }

        return $pokemons;
    }

    /**
     * @return Pokemon
     */
    public function fetchById(int $id): Pokemon
    {
        $sql = "SELECT * FROM pokemon WHERE id = :id;";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute(["id" => $id]);
        $assocArray = $stmt->fetch(PDO::FETCH_ASSOC);
        return $this->createPokemonByAssocArray($assocArray);
    }

    /**
     * @param array $array associative array reprensenting a DB row of Pokemon
     * @return Pokemon
     */
    private function createPokemonByAssocArray(array $array): Pokemon
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