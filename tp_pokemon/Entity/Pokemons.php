<?php

class Pokemons{
    private int $id;

    private int $weight;

    private int $height;

    private int $base_experience;

    private int $hp;

    private int $atk;

    private int $def;

    private int $spatk;

    private int $spdef;

    private int $spd;

    private int $spe;

    private string $name;

    private string $slug;

    private string $id_api;

    private string $name_api;

    private bool $is_default;

    public function getId(): int
    {
        return $this->id;
    }

    public function setId(int $id): void
    {
        $this->id = $id;
    }

    public function getWeight(): int
    {
        return $this->weight;
    }

    public function setWeight(int $weight): void
    {
        $this->weight = $weight;
    }

    public function getHeight(): int
    {
        return $this->height;
    }

    public function setHeight(int $height): void
    {
        $this->height = $height;
    }

    public function getBaseExperience(): int
    {
        return $this->base_experience;
    }

    public function setBaseExperience(int $base_experience): void
    {
        $this->base_experience = $base_experience;
    }

    public function getHp(): int
    {
        return $this->hp;
    }

    public function setHp(int $hp): void
    {
        $this->hp = $hp;
    }

    public function getAtk(): int
    {
        return $this->atk;
    }

    public function setAtk(int $atk): void
    {
        $this->atk = $atk;
    }

    public function getDef(): int
    {
        return $this->def;
    }

    public function setDef(int $def): void
    {
        $this->def = $def;
    }

    public function getSpatk(): int
    {
        return $this->spatk;
    }

    public function setSpatk(int $spatk): void
    {
        $this->spatk = $spatk;
    }

    public function getSpdef(): int
    {
        return $this->spdef;
    }

    public function setSpdef(int $spdef): void
    {
        $this->spdef = $spdef;
    }

    public function getSpd(): int
    {
        return $this->spd;
    }

    public function setSpd(int $spd): void
    {
        $this->spd = $spd;
    }

    public function getSpe(): int
    {
        return $this->spe;
    }

    public function setSpe(int $spe): void
    {
        $this->spe = $spe;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function getSlug(): string
    {
        return $this->slug;
    }

    public function setSlug(string $slug): void
    {
        $this->slug = $slug;
    }

    public function getIdApi(): string
    {
        return $this->id_api;
    }

    public function setIdApi(string $id_api): void
    {
        $this->id_api = $id_api;
    }

    public function getNameApi(): string
    {
        return $this->name_api;
    }

    public function setNameApi(string $name_api): void
    {
        $this->name_api = $name_api;
    }

    public function getIsDefault(): bool
    {
        return $this->is_default;
    }

    public function setIsDefault(bool $is_default): void
    {
        $this->is_default = $is_default;
    }
}