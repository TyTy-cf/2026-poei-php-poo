<?php

class Rook extends Piece
{

    public function __construct(string $color)
    {
        parent::__construct(5, $color);
    }

    public function move(): void {
        echo "move de Rook";
    }

}