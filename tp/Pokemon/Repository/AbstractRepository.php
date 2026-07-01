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
        $datas = $stmt->fetchAll(PDO::FETCH_CLASS, 'Class\Pokemon');
        return $datas;
    }

    /**
     * @return array<Pokemon>
     */
    public function fetchBy(int $offset, int $limit): array
    {
        $sql = "SELECT id, weight, height, base_experience as baseExperience, hp, atk, def, spa, spd, spe, name, slug, id_api as idApi, name_api as nameApi, is_default as isDefault FROM :table LIMIT :offset, :limit";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([
            'table' => $this->table,
            'offset' => $offset,
            'limit' => $limit
        ]);
        $datas = $stmt->fetchAll(PDO::FETCH_CLASS, 'Class\Pokemon');
        return $datas;
    }

    public function fetchById(int $id): Pokemon
    {
        $sql = "SELECT id, weight, height, base_experience as baseExperience, hp, atk, def, spa, spd, spe, name, slug, id_api as idApi, name_api as nameApi, is_default as isDefault FROM :table WHERE id = :id";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([
            'table' => $this->table,
            'id' => $id
        ]);
        $data = $stmt->fetchObject('Class\Pokemon');
        return $data;
    }

    public function deleteById(int $id): void
    {
        $sql = "DELETE FROM :table WHERE id = :id";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([
            'table' => $this->table,
            'id' => $id
        ]);
    }
}