<?php

class Circle extends AbstractForm {
    private float $radius;

    public function __construct(float $radius) {
        $this->radius = $radius;
    }

    public function getArea(): float {
        return pi() * ($this->radius ** 2);
    }
}

?>