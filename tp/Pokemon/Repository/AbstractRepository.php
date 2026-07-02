<?php

namespace Pokemon\Repository;

use Class\Pokemon;
use PDO;

abstract class AbstractRepository
{
    protected PDO $pdo;
    private string $table;

    private string $objectToMap;

    public function __construct(string $db, string $table, string $objectToMap)
    {
        $this->pdo = new PDO(
            "mysql:host=mariadb;dbname=$db;port=3306",
            'root',
            'root'
        );
        $this->pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
        $this->table = $table;
        $this->objectToMap = $objectToMap;
    }

    public function fetchAll(): array
    {
        $sql = "SELECT * FROM $this->table";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute();
        $datas = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $this->assocArrayToObjectArray($datas);
    }

    /**
     * @param array $param = ["colToSearch" => "test"]
     * @param int $limit
     * @param int $offset
     * @return array
     */
    public function fetchBy(array $param = [], int $limit = PHP_INT_MAX, int $offset = 0): array
    {
        $paramString = $this->fetchArrayToParams($param);
        $executeTable = $this->makeExecuteTable($param);
        $executeTable['offset'] = $offset;
        $executeTable['limit'] = $limit;

        $sql = "SELECT * FROM $this->table $paramString LIMIT :offset, :limit";
        $stmt = $this->pdo->prepare($sql);
        print_r($sql);
        print_r($executeTable);
        $stmt->execute($executeTable);
        $datas = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $this->assocArrayToObjectArray($datas);
    }

    public function fetchById(int $id): object
    {
        $sql = "SELECT * FROM $this->table WHERE id = :id";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([
            'id' => $id
        ]);
        $data = $stmt->fetch(PDO::FETCH_ASSOC);
        return $this->mapToObject($data);
    }

    public function deleteById(int $id): void
    {
        $sql = "DELETE FROM $this->table WHERE id = :id";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([
            'id' => $id
        ]);
    }

    /**
     * @param int $id
     * @param array $param = ["colToModify" => "value"]
     * @return void
     */
    public function updateBy(int $id, array $param): void
    {
        $paramString = $this->updateArrayToParam($param);
        $executeTable = $this->makeExecuteTable($param);
        $executeTable['id'] = $id;
        $sql = "UPDATE $this->table SET $paramString WHERE id = :id";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute($executeTable);
    }

    private function fetchArrayToParams(array $param): string
    {
        $paramString = '';

        if(count($param)>0) { $paramString .= 'WHERE ';}

        foreach ($param as $key => $value)
        {
            $testCharacter = '';
            if (preg_match('(<|>|=|!=|<>|<=|>=)',$value, $testCharacter))
            {
                $testCharacter = $testCharacter[0];
            }
            else {
                $testCharacter = "=";
            }
            $paramString .= "$key $testCharacter :value$key AND ";
        }

        return rtrim($paramString, " AND");
    }

    private function updateArrayToParam(array $param): string
    {
        $paramString = '';

        foreach ($param as $key => $value)
        {
            $paramString .= "$key = :value$key, ";
        }

        return rtrim($paramString, ", ");
    }

    private function makeExecuteTable(array $param): array
    {
        $table = [];

        foreach ($param as $key => $value)
        {
            $table["value$key"] = $value;
        }

        return $table;
    }

    abstract protected function mapToObject(array $assocArray): object;

    protected function assocArrayToObjectArray(array $assocArray): array
    {
        $objectArray = [];

        foreach ($assocArray as $item) {
            $objectArray[] = $this->mapToObject($item);
        }
        return $objectArray;
    }
}