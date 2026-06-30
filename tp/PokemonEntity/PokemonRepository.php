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

        $items = $stmt->fetchAll(PDO::FETCH_ASSOC);

        $pokemons = [];

        foreach ($items as $item) {
            $pokemon = new Pokemon();

            $pokemon->setId((int)$item['id']);
            $pokemon->setWeight((int)$item['weight']);
            $pokemon->setHeight((int)$item['height']);
            $pokemon->setBaseExperience((int)$item['base_experience']);
            $pokemon->setHp((int) $item['hp']);
            $pokemon->setAtk((int) $item['atk']);
            $pokemon->setDef((int) $item['def']);
            $pokemon->setSpa((int) $item['spa']);
            $pokemon->setSpd((int) $item['spd']);
            $pokemon->setSpe((int) $item['spe']);
            $pokemon->setName($item['name']);
            $pokemon->setSlug($item['slug']);
            $pokemon->setIdApi($item['id_api']);
            $pokemon->setNameApi($item['name_api']);
            $pokemon->setIsDefault((bool)$item['is_default']);

            $pokemons[] = $pokemon;
        }

        return $pokemons;
    }

}