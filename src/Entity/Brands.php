<?php


class Brands
{

    private ?int $id;

    private string $label;

    private string $description;

    // Attributs d'exemple pour illustrer des cas
    private DateTime $birthedAt;
    private DateTime $createdAt;
    private ?DateTime $updatedAt;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function setId(?int $id): void
    {
        $this->id = $id;
    }

    public function getLabel(): string
    {
        return $this->label;
    }

    public function setLabel(string $label): void
    {
        $this->label = $label;
    }

    public function getDescription(): string
    {
        return $this->description;
    }

    public function setDescription($description)
    {
        $this->description = $description;
    }

    // Exemple de méthodes utilitaires dans les classes

    public function getAge(): int
    {
        return date("Y", new DateTime()) - date("Y", $this->birthedAt);
    }

    public function getDisplayedDate(): DateTime
    {
        if ($this->updatedAt !== null) {
            return $this->updatedAt;
        }
        return $this->createdAt;
    }

}