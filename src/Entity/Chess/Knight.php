<?php

class Knight extends Piece
{

    public function __construct(string $color)
    {
        parent::__construct(3, $color);
    }

    public function move(): void {
        parent::move();
        echo "move de Knight";
    }

}