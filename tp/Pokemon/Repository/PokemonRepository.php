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
}