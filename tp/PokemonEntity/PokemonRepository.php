<?php

namespace PokemonEntity;
use PDO;

include __DIR__ . '/../components/pdo_Login.php';
include_once __DIR__ . '/Pokemon.php';

use Pokemon;



class PokemonRepository
{

    private PDO $pdo;

    public function setPdo(PDO $pdo): void
    {
        $this->pdo = $pdo;
    }


    public function fetchAll(): array
    {
        $sql = "SELECT * FROM pokemon";

        $stmt = $this->pdo->prepare($sql);
        $stmt->execute();

        $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);

        $pokemons = [];

        foreach ($rows as $row) {
            $pokemon = new Pokemon();

            $pokemon->setId($row['id']);
            $pokemon->setWeight((int) $row['weight']);
            $pokemon->setHeight((int) $row['height']);
            $pokemon->setBaseExperience((int) $row['base_experience']);
            $pokemon->setHp((int) $row['hp']);
            $pokemon->setAtk((int) $row['atk']);
            $pokemon->setDef((int) $row['def']);
            $pokemon->setSpa((int) $row['spa']);
            $pokemon->setSpd((int) $row['spd']);
            $pokemon->setSpe((int) $row['spe']);
            $pokemon->setName($row['name']);
            $pokemon->setSlug($row['slug']);
            $pokemon->setIdApi($row['id_api']);
            $pokemon->setNameApi($row['name_api']);
            $pokemon->setIsDefault((bool) $row['is_default']);

            $pokemons[] = $pokemon;
        }

        return $pokemons;
    }

}