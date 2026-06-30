<?php

class PokemonRepository
{

    private PDO $pdo;

    public function __construct()
    {

        $this->pdo = new PDO(
            $pdo = new PDO(
                'mysql:127.0.0.1;dbname=db_pokemons;charset=utf8;port=3306',
                'root',
                'root'
            )
        );

    }

    public function fetchAll(): array
    {
        $sql = "SELECT * FROM pokemon";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_CLASS, "Pokemon");
    }
    public function fetchById(int $id): ?Pokemon
    {
        $sql = "SELECT * FROM pokemon WHERE id = :id";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([
            'id' => $id
        ]);
        return $stmt->fetch(PDO::FETCH_CLASS, "Pokemon");
    }


}

