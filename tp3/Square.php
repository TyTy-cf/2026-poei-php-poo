<?php
class Square extends AbstractForm
{
  private float $length;

  public function __construct(float $length)
  {
    $this->length = $length;
  }

  public function getArea(): float
  {
    return $this->length * $this->length;
  }
}
?>
