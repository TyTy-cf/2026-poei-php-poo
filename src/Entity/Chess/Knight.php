<?php

class Knight extends AbstractPiece
{

    public function __construct(string $color)
    {
        parent::__construct(3, $color);
    }

    public function move(): void
    {
        echo "move de Knight";
    }
}