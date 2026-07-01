<?php

class Rectengle
{

    protected int $width;
    protected int $height;

    public function __construct(int $width, int $height)
    {
        $this->width = $width;
        $this->height = $height;
    }

    public function getArea(): float
    {

        return $this->width * $this->height;

    }

}