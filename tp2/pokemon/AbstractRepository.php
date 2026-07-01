<?php

abstract class AbstractRepository
{
  protected PDO $pdo;
  protected string $tableName;

  public function __construct(string $dbName, string $tableName)
  {
    $this->tableName = $tableName;
    $this->pdo = new PDO("mysql:host=mariadb;dbname=" . $dbName . ";port=3306", "root", "root");
  }

  public function fetchAll(): array
  {
    $sql = "SELECT * FROM " . $this->tableName . ";";
    $stmt = $this->pdo->prepare($sql);
    $stmt->execute();

    return $stmt->fetchAll(PDO::FETCH_CLASS, "Pokemon");
  }

  public function fetchById(int $id): ?object
  {
    $sql = "SELECT * FROM " . $this->tableName . " WHERE id = :id;";

    $stmt = $this->pdo->prepare($sql);
    $stmt->bindValue(':id', $id, PDO::PARAM_INT);
    $stmt->execute();

    return $stmt->fetchObject("Pokemon");
  }

  public function fetchBy(int $offset, int $limit): array
  {
    $sql = "SELECT * FROM " . $this->tableName . " LIMIT :offset, :limit;";
    $stmt = $this->pdo->prepare($sql);
    $stmt->bindValue(':offset', (int)$offset, PDO::PARAM_INT);
    $stmt->bindValue(':limit', (int)$limit, PDO::PARAM_INT);
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_CLASS, "Pokemon");
  }

  public function deleteById(int $id)
  {
    $sql = "DELETE FROM " . $this->tableName . " WHERE id = :id";
    $stmt = $this->pdo->prepare($sql);
    $stmt->execute([
      'id' => $id
    ]);
  }

  public function editById(int $id)
  {
    echo "edit.php?pokemon_id=" . $this->$id;
  }
}
