<?php

class Pokemon
{

    private int $id;

    private int $weight;

    private int $height;

    private int $base_experience;

    private int $hp;

    private int $atk;

    private int $def;

    private int $spa;

    private int $spd;

    private int $spe;

    private string $name;

    private string $slug;

    private string $id_api;

    private string $name_api;

    private int $is_default;

    // Getters

    public function getId(): ?int {
        return $this->id;
    }

    public function getWeight(): ?int {
        return $this->weight;
    }

    public function getHeight(): ?int {
        return $this->height;
    }

    public function getBaseExperience(): ?int {
        return $this->base_experience;
    }

    public function getHp(): ?int {
        return $this->hp;
    }

    public function getAtk(): ?int {
        return $this->atk;
    }

    public function getDef(): ?int {
        return $this->def;
    }

    public function getSpa(): ?int {
        return $this->spa;
    }

    public function getSpd(): ?int {
        return $this->spd;
    }

    public function getSpe(): ?int {
        return $this->spe;
    }

    public function getName(): ?string {
        return $this->name;
    }

    public function getSlug(): ?string {
        return $this->slug;
    }

    public function getIdApi(): ?string {
        return $this->id_api;
    }

    public function getNameApi(): ?string {
        return $this->name_api;
    }

    public function getIsDefault(): ?int {
        return $this->is_default;
    }

    // Setters

    public function setId(int $id): void {
        $this->id = $id;
    }

    public function setWeight(int $weight): void {
        $this->weight = $weight;
    }

    public function setHeight(int $height): void {
        $this->height = $height;
    }

    public function setBaseExperience(int $base_experience): void {
        $this->base_experience = $base_experience;
    }

    public function setHp(int $hp): void {
        $this->hp = $hp;
    }

    public function setAtk(int $atk): void {
        $this->atk = $atk;
    }

    public function setDef(int $def): void {
        $this->def = $def;
    }

    public function setSpa(int $spa): void {
        $this->spa = $spa;
    }

    public function setSpd(int $spd): void {
        $this->spd = $spd;
    }

    public function setSpe(int $spe): void {
        $this->spe = $spe;
    }

    public function setName(string $name): void {
        $this->name = $name;
    }

    public function setSlug(string $slug): void {
        $this->slug = $slug;
    }

    public function setIdApi(string $id_api): void {
        $this->id_api = $id_api;
    }

    public function setNameApi(string $name_api): void {
        $this->name_api = $name_api;
    }

    public function setIsDefault(int $is_default): void {
        $this->is_default = $is_default;
    }
}

?>