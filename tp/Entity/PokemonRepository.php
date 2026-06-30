<?php

include_once "../src/Utility/utility.php";

class PokemonRepository
{
function __construct(){
    $pdo = new PDO(
        'mysql:host=mariadb;dbname=db_pokemons;port=3306',
        'root',
        'root'
    );


    $sql = "SELECT * FROM pokemon";
    $stmt = $pdo->prepare($sql);
    $stmt->execute();
    $pokemons = $stmt->fetchAll(PDO::FETCH_ASSOC);

}
}