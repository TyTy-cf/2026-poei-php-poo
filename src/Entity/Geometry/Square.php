<?php

class Square extends Rectangle
{

    /**
     * @param float $width
     */
    public function __construct(float $width)
    {
        parent::__construct($width, $width);
    }

}