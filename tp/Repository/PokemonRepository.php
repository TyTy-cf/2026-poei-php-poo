<?php

class PokemonRepository
{

    private PDO $pdo;

    public function __construct() {
        $this->pdo = new PDO(
            'mysql:host=mariadb;dbname=db_pokemons;charset=utf8;port=3306',
            'root',
            'root'
        );
    }

    public function fetchAll(): array {
        $sql = "SELECT * FROM pokemon";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute();

        $assocArray = $stmt->fetchAll(PDO::FETCH_ASSOC);

        $pokemons = [];
        foreach($assocArray as $row) {
            $pokemons[] = $this->createPokemonByAssocArray($row);
        }

        return $pokemons;
    }

    private function  createPokemonByAssocArray(array $row): Pokemon {
        $pokemon = new Pokemon();

        $pokemon->setId($row['id']);
        $pokemon->setWeight($row['weight']);
        $pokemon->setHeight($row['height']);
        $pokemon->setBaseExperience($row['base_experience']);
        $pokemon->setHp($row['hp']);
        $pokemon->setAtk($row['atk']);
        $pokemon->setDef($row['def']);
        $pokemon->setSpa($row['spa']);
        $pokemon->setSpd($row['spd']);
        $pokemon->setSpe($row['spe']);
        $pokemon->setName($row['name']);
        $pokemon->setSlug($row['slug']);
        $pokemon->setIdApi($row['id_api']);
        $pokemon->setNameApi($row['name_api']);
        $pokemon->setIsDefault($row['is_default']);

        return $pokemon;
    }
}

?>