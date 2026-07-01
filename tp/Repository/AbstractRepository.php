<?php

namespace Repository;

use PDO;

abstract class AbstractRepository
{

    protected PDO $pdo;
    protected string $tableName;

    public function __construct(string $db, string $tableName)
    {
        $this->pdo = new PDO(
            "mysql:host=mariadb;dbname=" . $db . ";port=3306",
            "root",
            "root"
        );
        $this->tableName = $tableName;

    }

    abstract protected function createObjectByAssocArray(array $array): object;

    public function fetchAll(): array
    {
        $sql = "SELECT * FROM $this->tableName;";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute();
        $assocArray = $stmt->fetchAll(PDO::FETCH_ASSOC);

        $arrayData = [];
        foreach ($assocArray as $row) {
            $arrayData[] = $this->createObjectByAssocArray($row);
        }

        return $arrayData;
    }

    public function fetchById(int $id): ?object
    {
        $sql = "SELECT * FROM $this->tableName WHERE id = :id;";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute(["id" => $id]);
        $assocArray = $stmt->fetch(PDO::FETCH_ASSOC);
        return $this->createObjectByAssocArray($assocArray);
    }

    public function fetchBy(array $fields ,int $offset, int $limit): array
    {
        $sql ="SELECT * FROM $this->tableName";

        if(count($fields)>0)
        {
            $sql = $sql." WHERE ";
            foreach ($fields as $key => $field){


              $sql= $sql. $key ."=".$field . ' AND ';


            }

            $sql = substr($sql, 0, -4);
        }


        $sql = $sql . " LIMIT ?, ?";

        dump($sql);

        $stmt = $this->pdo->prepare($sql);
        $stmt->bindValue(1, $offset, PDO::PARAM_INT);
        $stmt->bindValue(2, $limit, PDO::PARAM_INT);
        $stmt->execute();
        $assocArray = $stmt->fetchAll(PDO::FETCH_ASSOC);

        $pokemons = [];
        foreach ($assocArray as $row) {
            $pokemons[] = $this->createObjectByAssocArray($row);
        }

        return $pokemons;
    }




    }