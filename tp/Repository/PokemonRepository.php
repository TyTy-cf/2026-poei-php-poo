<?php

include_once __DIR__."/../Pokemon/Pokemon.php";

$pdo = new PDO(
    'mysql:host=mariadb;dbname=db_pokemons;port:3306;charset=utf8',
    'root',
    'root'
);

class PokemonRepository
{

    private PDO $pdo;

    public function __construct() {
        $this->pdo = new PDO(
            'mysql:mariadb;dbname=db_pokemons;port=3306',
            'root',
            'root'
        );
    }

    public function fetchAll(): array {
        $sql = "SELECT * FROM pokemon";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_CLASS, Pokemon);
    }
}

?>