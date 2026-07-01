<?php

abstract class AbstractRepository
{
  private PDO $pdo;

  public function __construct(string $dbName)
  {
    $this->pdo = new PDO("mysql:host=mariadb;dbname=" . $dbName . ";port=3306", "root", "root");
  }

  public function fetchAll(string $tableName, string $className): array
  {
    $sql = "SELECT * FROM :tableName;";

    $stmt = $this->pdo->prepare($sql);
    $stmt->bindValue(':tableName', $tableName, PDO::PARAM_STR);
    $stmt->execute();

    return $stmt->fetchAll(PDO::FETCH_CLASS, $className);
  }

  public function fetchById(string $tableName, string $className, int $id): ?object
  {
    $sql = "SELECT * FROM :tableName WHERE id = :id;";

    $stmt = $this->pdo->prepare($sql);
    $stmt->bindValue(':tableName', $tableName, PDO::PARAM_STR);
    $stmt->bindValue(':id', $id, PDO::PARAM_INT);
    $stmt->execute();

    return $stmt->fetchObject($className);
  }
}
