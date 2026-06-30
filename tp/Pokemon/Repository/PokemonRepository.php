<?php

namespace Pokemon\Repository;

use PDO;
use Class\Pokemon;

include_once __DIR__ . '/../Class/Pokemon.php';

class PokemonRepository
{
    private PDO $pdo;

    public function __construct()
    {
        $this->pdo = new PDO(
            'mysql:host=mariadb;dbname=db_pokemons;port=3306',
            'root',
            'root'
        );
    }

    /**
     * @return array<Pokemon>
     */
    public function fetchAll(): array
    {
        $sql = "SELECT id, weight, height, base_experience as baseExperience, hp, atk, def, spa, spd, spe, name, slug, id_api as idApi, name_api as nameApi, is_default as isDefault FROM pokemon";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute();
        $pokemons = $stmt->fetchAll(PDO::FETCH_CLASS, 'Class\Pokemon');
        return $pokemons;
    }
    public function fetchById(int $id): Pokemon
    {
        $sql = "SELECT id, weight, height, base_experience as baseExperience, hp, atk, def, spa, spd, spe, name, slug, id_api as idApi, name_api as nameApi, is_default as isDefault FROM pokemon WHERE id = :id";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([
            'id' => $id
        ]);
        $pokemon = $stmt->fetchObject('Class\Pokemon');
        return $pokemon;
    }
    public function deleteById(int $id): void
    {
        $sql = "DELETE FROM pokemon WHERE id = :id";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([
            'id' => $id
        ]);
    }
    public function add(Pokemon $pokemon): void
    {
        $sql = "INSERT INTO pokemon(weight, height, base_experience, hp, atk, def, spa, spd, spe, name, slug, id_api, name_api, is_default) VALUES (weight, height, base_experience, hp, atk, def, spa, spd, spe, name, slug, id_api, name_api, is_default)" ;
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([
            'weight' => $pokemon->getWeight(),
            'height' => $pokemon->getHeight(),
            'base_experience' => $pokemon->getBaseExperience(),
            'hp' => $pokemon->getHp(),
            'atk' => $pokemon->getAtk(),
            'def' => $pokemon->getDef(),
            'spa' => $pokemon->getSpa(),
            'spd' => $pokemon->getSpd(),
            'spe' => $pokemon->getSpe(),
            'name' => $pokemon->getName(),
            'slug' => $pokemon->getSlug(),
            'id_api' => $pokemon->getIdApi(),
            'name_api' => $pokemon->getNameApi(),
            'is_default' => $pokemon->getIsDefault()
        ]);
    }
}