<?php
class Product
{
  public function __construct(
    private int $id,
    private string $name,
    private float $price,
    private Category $category
  ) {}

  public function getId(): int
  {
    return $this->id;
  }

  public function getName(): string
  {
    return $this->name;
  }

  public function getPrice(): float
  {
    return $this->price;
  }

  public function getCategory(): Category
  {
    return $this->category;
  }

  public function setCategory(Category $category): void
  {
    $this->category = $category;
  }
}
