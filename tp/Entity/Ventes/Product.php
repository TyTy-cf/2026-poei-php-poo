<?php

class Product
{
    private int $id; // Identifiant du vêtement

    private string $name; // Nom du vêtement

    private int $price; // Prix TTC

    private string $description; // Description du vêtement

    private string $imgLink; // Lien d'une image

    private string $size; // XS -> XXXL

    private DateTime $createdAt; // Date de création

    private DateTime $updatedAt; // Date de mise à jour

    private ClothesCategory $category; // Catégorie de vêtement

    // Getters

    public function getId(): ?int {
        return $this->id;
    }

    public function getName(): ?string {
        return $this->name;
    }

    public function getPrice(): ?int {
        return $this->price;
    }

    public function getDescription(): ?string {
        return $this->description;
    }

    public function getImgLink(): ?string {
        return $this->imgLink;
    }

    public function getSize(): ?string {
        return $this->size;
    }

    public function getCreatedAt(): ?DateTime {
        return $this->createdAt;
    }

    public function getUpdatedAt(): ?DateTime {
        return $this->updatedAt;
    }

    public function getCategory(): ?ClothesCategory {
        return $this->category;
    }

    // Setters

    public function setId(int $id): void {
        $this->id = $id;
    }

    public function setName(string $name): void {
        $this->name = $name;
    }

    public function setPrice(int $price): void {
        $this->price = $price;
    }

    public function setDescription(string $description): void {
        $this->description = $description;
    }

    public function setImgLink(string $imgLink): void {
        $this->imgLink = $imgLink;
    }

    public function setSize(string $size): void {
        $this->size = $size;
    }

    public function setCreatedAt(DateTime $createdAt): void{
        $this->createdAt = $createdAt;
    }

    public function setUpdatedAt(DateTime $updatedAt): void{
        $this->updatedAt = $updatedAt;
    }

    public function setCategory(ClothesCategory $category): void {
        $this->category = $category;
    }
}

?>