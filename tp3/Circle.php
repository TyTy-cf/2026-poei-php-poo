<?php
class Circle extends AbstractForm
{
  private float $radius;
  private float $pi = 3.14;

  public function __construct(float $radius)
  {
    $this->radius = $radius;
  }

  public function getArea(): float
  {
    return ($this->pi * $this->radius * $this->radius);
  }
}
