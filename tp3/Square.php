<?php
class Square extends AbstractForm
{
  private float $width;

  public function __construct(float $width)
  {
    $this->width = $width;
  }

  public function getArea(): float
  {
    return $this->width * $this->width;
  }
}
