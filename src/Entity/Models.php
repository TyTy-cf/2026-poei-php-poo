<?php


class Models
{

  private int $id;
  private int $brand_id;
  private int $category_id;
  private string $label;
  private string $description;


  public function getId(): int
  {
    return $this->id;
  }

  public function setId(int $id): void
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

  public function getDescription(): ?string
  {
    return $this->description;
  }

  public function setDescription(?string $description): void
  {
    $this->description = $description;
  }
}
