<?php

class Square extends AbstractForm
{
    private float $width;

    public function getWidth(): float
    {
        return $this->width;
    }

    public function setWidth(float $width): void
    {
        $this->width = $width;
    }

    public function getArea(): float
    {
        return pow($this->width, 2);
    }
}