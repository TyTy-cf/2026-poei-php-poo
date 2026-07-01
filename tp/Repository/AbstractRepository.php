<?php

abstract class AbstractRepository {

    protected PDO $pdo;
    
    protected string $table;

    public function __construct(string $db, string $table)
    {
        $this->pdo = new PDO(
            "mysql:host=mariadb;dbname=".$db.";port=3306",
            "root",
            "root"
        );

        $this->table = $table;
    }

    abstract protected function createObjectByAssocArray(array $array): object;

    public function fetchAll(): array
    {
        $sql = "SELECT * FROM $this->table";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute();
        
        $assocArray = $stmt->fetchAll(PDO::FETCH_ASSOC);

        $result = [];
        foreach ($assocArray as $row) {
            $result[] = $this->createObjectByAssocArray($row);
        }

        return $result;
    }

    public function fetchBy(int $offset, int $limit): array {
        $sql = "SELECT * FROM $this->table LIMIT ?, ?;";
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindValue(1, $offset, PDO::PARAM_INT);
        $stmt->bindValue(2, $limit, PDO::PARAM_INT);
        $stmt->execute();
        $assocArray = $stmt->fetchAll(PDO::FETCH_ASSOC);

        $result = [];
        foreach ($assocArray as $row) {
            $result[] = $this->createObjectByAssocArray($row);
        }

        return $result;
    }

    public function fetchById(int $id): Pokemon {
        $sql = "SELECT * FROM $this->table WHERE id = :id;";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute(["id" => $id]);
        $assocArray = $stmt->fetch(PDO::FETCH_ASSOC);
        return $this->createObjectByAssocArray($assocArray);
    }
}