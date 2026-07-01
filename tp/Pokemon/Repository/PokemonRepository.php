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