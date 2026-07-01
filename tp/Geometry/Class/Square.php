<?php

namespace Geometry\Class;
include_once __DIR__ . '/Rectangle.php';

class Square extends Rectangle
{

    public function __construct(float $width)
    {
        parent::__construct($width, $width);
    }
}