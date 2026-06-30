<?php

try{
    $pdo = new PDO(
        'mysql:host=mariadb;dbname=db_pokemons;charset=utf8;port=3306',
        'root',
        'root'
    );
    var_dump($pdo);
//    echo 'connecté';
} catch (PDOException $e){
    var_dump($e);
}