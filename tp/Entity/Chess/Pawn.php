<?php

class Pawn extends AbstractPiece
{

    public function __construct(string $color)
    {
        parent::__construct(1, $color);
    }

    public function move(): void {
        echo "move de Pawn";
        parent::checkStraight(1, AbstractPiece::DIR_VERTICAL);
    }

}