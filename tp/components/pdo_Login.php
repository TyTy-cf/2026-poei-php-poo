<?php
try {
    $pdo = new PDO(
        'mysql:host=mariadb;dbname=db_pokemons;port:3306;charset=utf8',
        'root',
        'root');
//    echo 'ok ';
}catch (PDOException $e)
{
    echo 'Erreur connexion : ' . $e->getMessage();
}
?>



