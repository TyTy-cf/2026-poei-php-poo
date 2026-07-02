<?php

abstract class AbstractRepository
{
  protected PDO $pdo;
  protected string $tableName;
  protected array $fields;

  public function __construct(string $dbName, string $tableName)
  {
    $this->tableName = $tableName;
    $this->pdo = new PDO("mysql:host=mariadb;dbname=" . $dbName . ";port=3306", "root", "root");
  }

  public function fetchAll(): array
  {
    $sql = "SELECT * FROM ?;";
    $stmt = $this->pdo->prepare($sql);
    $stmt->execute([
      $this->tableName
    ]);

    return $stmt->fetchAll(PDO::FETCH_CLASS, $this->tableName);
  }

  public function fetchById($id)
  {
    $sql = "SELECT * FROM " . strtolower($this->tableName) . " WHERE id = :id;";

    $stmt = $this->pdo->prepare($sql);
    $stmt->execute([
      'id' => intval($id)
    ]);

    return $stmt->fetchObject($this->tableName);
  }

  public function fetchBy(int $offset, int $limit): array
  {
    $sql = "SELECT * FROM " . strtolower($this->tableName) . " LIMIT :offset, :limit;";
    $stmt = $this->pdo->prepare($sql);
    $stmt->bindValue(':offset', (int)$offset, PDO::PARAM_INT);
    $stmt->bindValue(':limit', (int)$limit, PDO::PARAM_INT);
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_CLASS, $this->tableName);
  }

  public function create(array $data): mixed
  {
    $fields = implode(", ", array_keys($data));
    $placeholders = ":" . implode(", :", array_keys($data));

    $sql = "INSERT INTO " . strtolower($this->tableName) . " ($fields) VALUES ($placeholders);";
    $stmt = $this->pdo->prepare($sql);
    return $sql;
    // $stmt->execute($data);
  }

  public function findBy(array $fields, int $offset, int $limit): array
  {
    $bindvalues = [];
    $sql = "SELECT * FROM " . strtolower($this->tableName) . " WHERE ";

    if ($fields) {
      foreach ($fields as $field => $value) {
        $sql .= $field . " = :" . $field . " AND ";
        $bindvalues[$field] = $value;
      }
    }

    $sql = rtrim($sql, "AND ");
    $sql .= " LIMIT :offset, :limit;";
    $bindvalues['offset'] = $offset;
    $bindvalues['limit'] = $limit;
    $stmt = $this->pdo->prepare($sql);

    foreach ($bindvalues as $key => $value) {
      $type = is_int($value) ? PDO::PARAM_INT : PDO::PARAM_STR;
      $stmt->bindValue(':' . $key, $value, $type);
    }
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_CLASS, $this->tableName);
  }

  public function deleteById($id)
  {
    $sql = "DELETE FROM {$this->tableName} WHERE id = :id";
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
