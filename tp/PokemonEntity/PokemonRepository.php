<?php

namespace PokemonEntity;
use PDO;

include __DIR__ . '/../components/pdo_Login.php';



class PokemonRepository
{

    private PDO $pdo;

    public function setPdo(PDO $pdo): void
    {
        $this->pdo = $pdo;
    }


    public function fetchAll()
    {
        $sql = "SELECT * FROM pokemon";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);

    }

}