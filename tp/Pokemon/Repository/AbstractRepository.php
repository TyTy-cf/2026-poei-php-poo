<?php

namespace Pokemon\Repository;

use Class\Pokemon;
use PDO;

abstract class AbstractRepository
{
    protected PDO $pdo;
    protected string $table;

    public function __construct(string $db, string $table)
    {
        $this->pdo = new PDO(
            "mysql:host=mariadb;dbname=$db;port=3306",
            'root',
            'root'
        );
        $this->pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
        $this->table = $table;
    }

    /**
     * @return array<Pokemon>
     */
    public function fetchAll(): array
    {
        $sql = "SELECT id, weight, height, base_experience as baseExperience, hp, atk, def, spa, spd, spe, name, slug, id_api as idApi, name_api as nameApi, is_default as isDefault FROM :table";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([
            'table' => $this->table
        ]);
        $pokemons = $stmt->fetchAll(PDO::FETCH_CLASS, 'Class\Pokemon');
        return $pokemons;
    }
}