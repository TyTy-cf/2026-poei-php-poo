<?php

class Triangle extends AbstractForm
{
protected int $base;

protected int $height;

public function __construct(int $valueBase, int $valueHeight)
{
    $this->height = $valueHeight;
    $this->base = $valueBase;
}

public function getArea(): float
{
    return $this->base * $this->height / 2;
}

}