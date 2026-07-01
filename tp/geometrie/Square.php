<?php

class Square extends AbstractForm
{
protected int $width;

public function __construct(int $value){
    $this->width = $value;
}
    public function getArea(): float
    {
        return $this->width * $this->width;

    }

}
