<?php

include_once "../src/Utility/utility.php";

class PokemonRepository
{

private PDO $pdo;

public function __construct(){
    $this->pdo = new PDO(
        'mysql:host=mariadb;dbname=db_pokemons;port=3306',
        'root',
        'root'
    );

}
public function fetchAll(): array{
    $sql = "SELECT * FROM pokemon";
    $stmt = $pdo->prepare($sql);
    $stmt->execute();
    $pokemons = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $pokemons;
}

public function fetchByID() : array{
    $sql = "SELECT * FROM pokemon WHERE "
}

}