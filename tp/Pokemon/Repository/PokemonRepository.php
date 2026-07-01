<?php

namespace Pokemon\Repository;

use PDO;
use Class\Pokemon;

include_once __DIR__ . '/../Class/Pokemon.php';
include_once __DIR__ . '/../Repository/AbstractRepository.php';

class PokemonRepository extends AbstractRepository
{

    public function __construct()
    {
        parent::__construct('db_pokemons', 'pokemon');
    }

    /**
     * @return array<Pokemon>
     */

    public function fetchAll(): array
    {
        return parent::fetchAll();
    }

    /**
     * @return array<Pokemon>
     */
    public function fetchBy(int $offset, int $limit): array
    {
        $sql = "SELECT id, weight, height, base_experience as baseExperience, hp, atk, def, spa, spd, spe, name, slug, id_api as idApi, name_api as nameApi, is_default as isDefault FROM pokemon LIMIT :offset, :limit";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([
            'offset' => $offset,
            'limit' => $limit
        ]);
        $pokemons = $stmt->fetchAll(PDO::FETCH_CLASS, 'Class\Pokemon');
        return $pokemons;
    }
    public function fetchById(int $id): Pokemon
    {
        $sql = "SELECT id, weight, height, base_experience as baseExperience, hp, atk, def, spa, spd, spe, name, slug, id_api as idApi, name_api as nameApi, is_default as isDefault FROM pokemon WHERE id = :id";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([
            'id' => $id
        ]);
        $pokemon = $stmt->fetchObject('Class\Pokemon');
        return $pokemon;
    }
    public function deleteById(int $id): void
    {
        $sql = "DELETE FROM pokemon WHERE id = :id";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([
            'id' => $id
        ]);
    }
    public function add(Pokemon $pokemon): void
    {
        $sql = "INSERT INTO pokemon(weight, height, base_experience, hp, atk, def, spa, spd, spe, name, slug, id_api, name_api, is_default) VALUES (:weight, :height, :base_experience, :hp, :atk, :def, :spa, :spd, :spe, :name, :slug, :id_api, :name_api, :is_default)" ;
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([
            'weight' => $pokemon->getWeight(),
            'height' => $pokemon->getHeight(),
            'base_experience' => $pokemon->getBaseExperience(),
            'hp' => $pokemon->getHp(),
            'atk' => $pokemon->getAtk(),
            'def' => $pokemon->getDef(),
            'spa' => $pokemon->getSpa(),
            'spd' => $pokemon->getSpd(),
            'spe' => $pokemon->getSpe(),
            'name' => $pokemon->getName(),
            'slug' => $pokemon->getSlug(),
            'id_api' => $pokemon->getIdApi(),
            'name_api' => $pokemon->getNameApi(),
            'is_default' => $pokemon->getIsDefault()
        ]);
    }
}