<?php

abstract class AbstractRepository
{

    protected PDO $pdo;

    public function __construct(string $db)
    {
        $this->pdo = new PDO(
            "mysql:host=mariadb;dbname=".$db.";port=3306",
            "root",
            "root"
        );
    }

    abstract protected function createObjectByAssocArray(array $array): object;

    protected function fetchAll($table): array{
        $stmt = $this->pdo->prepare("SELECT * FROM ?");
        $stmt->bindValue(1, $table, PDO::PARAM_STR);
        $stmt->execute();
        return $stmt->fetchAll();
    }

}