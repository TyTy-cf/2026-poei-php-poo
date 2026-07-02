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
        parent::__construct('db_pokemons', 'pokemon', Pokemon::class);
    }

    /**
     * @return array<Pokemon>
     */
    public function fetchAll(): array
    {
        return parent::fetchAll();
    }

    /**
     * @param array $param ["colToSearch" => "test"]
     * @param int $limit
     * @param int $offset
     * @return array<Pokemon>
     */
    public function fetchBy(array $param = [], int $limit = PHP_INT_MAX, int $offset = 0): array
    {
        return parent::fetchBy($param, $limit, $offset);
    }

    public function fetchById(int $id): Pokemon
    {
        return parent::fetchById($id);
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

    /**
     * @param array $assocArray
     * @return Pokemon
     */
    protected function mapToObject(array $assocArray): Pokemon
    {
        $pokemon = new Pokemon();

        $pokemon->setWeight($assocArray['weight']);
        $pokemon->setHeight($assocArray['height']);
        $pokemon->setBaseExperience($assocArray['base_experience']);
        $pokemon->setHp($assocArray['hp']);
        $pokemon->setAtk($assocArray['atk']);
        $pokemon->setDef($assocArray['def']);
        $pokemon->setSpa($assocArray['spa']);
        $pokemon->setSpd($assocArray['spd']);
        $pokemon->setSpe($assocArray['spe']);
        $pokemon->setName($assocArray['name']);
        $pokemon->setSlug($assocArray['slug']);
        $pokemon->setIdApi($assocArray['id_api']);
        $pokemon->setNameApi($assocArray['name_api']);
        $pokemon->setIsDefault($assocArray['is_default']);

        return $pokemon;
    }

    /**
     * @param array $assocArray
     * @return array<Pokemon>
     */
    protected function assocArrayToObjectArray(array $assocArray): array
    {
        parent::assocArrayToObjectArray($assocArray);
    }
}