<?php

try{
    $pdo = new PDO(
        'mysql:host=127.0.0.1;dbname=db_pokemons;charset=utf8;port=3306',
        'root',
        'root'
    );
    echo 'connecté';
} catch (PDOException $e){
    var_dump($e);
}