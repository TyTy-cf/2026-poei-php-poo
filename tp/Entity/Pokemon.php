<?php

class Pokemon
{

    private int $id;

    private int $weight;

    private int $height;

    private int $baseExperience;

    private int $hp;

    private int $atk;

    private int $def;

    private int $spa;

    private int $spd;

    private int $spe;

    private string $name;

    private string $slug;

    private string $idApi;

    private string $nameApi;

    private int $isDefault;

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
        return $this->baseExperience;
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
        return $this->idApi;
    }

    public function getNameApi(): ?string {
        return $this->nameApi;
    }

    public function getIsDefault(): ?int {
        return $this->isDefault;
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

    public function setBaseExperience(int $baseExperience): void {
        $this->baseExperience = $baseExperience;
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

    public function setIdApi(string $idApi): void {
        $this->idApi = $idApi;
    }

    public function setNameApi(string $nameApi): void {
        $this->nameApi = $nameApi;
    }

    public function setIsDefault(int $isDefault): void {
        $this->isDefault = $isDefault;
    }
}

?>