<?php

abstract class AbstractRepository
{

    protected PDO $pdo;

    public function __construct(string $db, protected string $table)
    {
        $this->pdo = new PDO(
            "mysql:host=mariadb;dbname=".$db.";port=3306",
            "root",
            "root"
        );
        $this->pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
    }

    public function fetchAll(): array
    {
        $sql = "SELECT * FROM $this->table;";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute();
        $assocArray = $stmt->fetchAll(PDO::FETCH_ASSOC);

        $objects = [];
        foreach ($assocArray as $row) {
            $objects[] = $this->createObjectByAssocArray($row);
        }

        return $objects;
    }

    public function fetchBy(array $param, int $offset, int $limit): array
    {
        $bindValues = [];
        $sql = "SELECT * FROM $this->table";
        $strLimit = " LIMIT :offset, :limit;";

        if (count($param) > 0) {
            $sql .= " WHERE ";
            foreach ($param as $key => $value) {
                $sql .= "$key = :value_$key AND ";
                $bindValues['value_'.$key] = $value;
            }
            $sql = rtrim($sql, " AND");
        }
        $sql .= $strLimit;

        $bindValues['offset'] = $offset;
        $bindValues['limit'] = $limit;

        $stmt = $this->pdo->prepare($sql);
        $stmt->execute($bindValues);
        $assocArray = $stmt->fetchAll(PDO::FETCH_ASSOC);

        $objects = [];
        foreach ($assocArray as $row) {
            $objects[] = $this->createObjectByAssocArray($row);
        }

        return $objects;
    }

    public function fetchById(int $id): object
    {
        $sql = "SELECT * FROM $this->table WHERE id = :id;";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute(["id" => $id]);
        $assocArray = $stmt->fetch(PDO::FETCH_ASSOC);
        return $this->createObjectByAssocArray($assocArray);
    }

    abstract protected function createObjectByAssocArray(array $array): object;

}