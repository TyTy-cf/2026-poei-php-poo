<?php

function dump(mixed $data): void
{
    echo '<pre>';
    var_dump($data);
    echo '</pre>';
}
class Brands
{

    private ?int $id;

    private string $label;

    private string $description;


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

    public function setDescription(string $description): void
    {
        $this->description = $description;
    }

}

$brand = new Brands();
$brand->setId(1);
$brand->setLabel("Ford");
$brand->setDescription("Id asperiores quos laboriosam fugit expedita dolor...");


dump($brand);
