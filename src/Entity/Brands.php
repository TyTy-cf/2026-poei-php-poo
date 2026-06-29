<?php

namespace Entity;

include_once "/home/ipme/Bureau/DWWM/php/php-objet/2026-poei-php-poo/src/Utility/utility.php";

class Brands
{

    private ?int $id;

    private string $label;

    private string $description;

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


}

$brand = new Brands();
$brand->setId(1);
$brand->setLabel("Ford");


dump($brand);
