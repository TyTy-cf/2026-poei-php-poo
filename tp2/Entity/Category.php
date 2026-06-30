<?php

class Category
{
  private int $id;
  private string $name;

  
  public function getId(): int
  {
    return $this->id;
  }

  public function getName(): string
  {
    return $this->name;
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
}
