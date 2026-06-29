<?php

class Models
{

    private int $id;

    private string $label;

    private string $description;

    // Getters

    public function getId(): ?int {
        return $this->id;
    }

    public function getLabel(): ?string {
        return $this->label;
    }

    public function getDescription(): ?string {
        return $this->description;
    }

    // Setters

    public function setId(int $id): void {
        $this->id = $id;
    }

    public function setLabel(string $label): void {
        $this->label = $label;
    }

    public function setDescription(string $description): void {
        $this->description = $description;
    }

}

?>