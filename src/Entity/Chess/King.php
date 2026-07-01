<?php

class King extends AbstractPiece
{

    public function __construct(string $color)
    {
        parent::__construct(1000, $color);
    }

    public function move(): void
    {
        echo "move de King";
        parent::checkStraight(1, AbstractPiece::DIR_BOTH_STRAIGHT);
        parent::checkDiagonal(1);
    }
}