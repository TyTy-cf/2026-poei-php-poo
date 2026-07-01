<?php

abstract class AbstractRepository
{

    protected PDO $pdo;

    protected string $nametable;

    public function __construct(string $db, string $nametable)
    {
        $this->pdo = new PDO(
            "mysql:host=mariadb;dbname=".$db.";port=3306",
            "root",
            "root"
        );
        $this->nametable = $nametable;
    }

    function fetchAll (string $nametable): array
    {
        $sql = "SELECT * FROM $this->nametable;";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute();
        $assocArray = $stmt->fetchAll(PDO::FETCH_ASSOC);

        $objects = [];
        foreach ($assocArray as $row){
            $objects[] = $this->createObjectByAssocArray($row);
        }
        return $objects;
    }


    abstract protected function createObjectByAssocArray(array $array): object;

}