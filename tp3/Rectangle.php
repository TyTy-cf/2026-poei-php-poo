<?php
class Rectangle extends AbstractForm
{
  private float $height;
  private float $width;

  public function __construct(float $height, float $width)
  {
    $this->height = $height;
    $this->width = $width;
  }

  public function getArea(): float
  {
    return $this->width * $this->height;
  }
}
