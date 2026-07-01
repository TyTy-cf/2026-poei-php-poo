<?php

abstract class AbstractRepository
{
    protected string $table;
    protected PDO $pdo;

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

    protected function fetchAll(): array{
        $sql = "SELECT * FROM $this->table";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute();
        $assocArray = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $objects = [];
        foreach($assocArray as $object){
            $objects[] = $this->createObjectByAssocArray($object);
        }
        return $objects;
    }
}