<?php

class PokemonRepository
{
  private PDO $pdo;

  public function __construct()
  {
    $this->pdo = new PDO("mysql:host=mariadb;dbname=db_pokemons;port=3306", "root", "root");
  }

  public function fetchAll(): array
  {
    $sql = "SELECT * FROM pokemon";
    $stmt = $this->pdo->prepare($sql);
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_CLASS, "Pokemon");
  }

  public function fetchById($id): Pokemon
  {
    $sql = "SELECT * FROM pokemon WHERE id = :id";
    $stmt = $this->pdo->prepare($sql);
    $stmt->execute([
      'id' => $id
    ]);
    return $stmt->fetchObject("Pokemon");
  }
}
