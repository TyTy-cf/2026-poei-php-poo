<?php



class PokemonRepository {

    private PDO $pdo;
    public function __construct() {
        $this->pdo = new PDO(
            'mysql:host=mariadb;dbname=db_pokemons;charset=utf8;port=3306',
            'root',
            'root'
        );
    }

    public function FetchAll(){
        $sql = "SELECT * FROM pokemon";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute();
        $pokemons = $stmt->fetchAll(PDO::FETCH_CLASS);
        return $pokemons;
    }

    public function FetchById(int $id){
        $sql = "SELECT * FROM pokemon WHERE id = :id";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([
            "id" => $id
        ]);
        $pokemon = $stmt->fetchAll(PDO::FETCH_CLASS);
        return $pokemon;
    }
}