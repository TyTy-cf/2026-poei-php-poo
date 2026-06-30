<?php
class Product
{
  private int $id;
  private string $name;
  private float $price;
  private Category $category;

  
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

  /**
   * Set the value of name
   *
   * @return  self
   */
  public function setName(string $name)
  {
    $this->name = $name;

    return $this;
  }


  /**
   * Set the value of price
   *
   * @return  self
   */
  public function setPrice(float $price)
  {
    $this->price = $price;

    return $this;
  }

  /**
   * Set the value of id
   *
   * @return  self
   */
  public function setId(int $id)
  {
    $this->id = $id;

    return $this;
  }
}
