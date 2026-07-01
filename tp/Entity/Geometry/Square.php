<?php

class Square extends AbstractForm
{
protected int $width;



public function __construct(int $width)
{
    $this->width = $width;
}

public function getArea(): float
{

    return $this->width * $this->width;

}

};