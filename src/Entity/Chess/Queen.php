<?php

class Queen extends AbstractPiece
{

    public function __construct(string $color)
    {
        parent::__construct(9, $color);
    }

    public function move(): void
    {
        echo "move de Queen";
        parent::checkStraight(AbstractPiece::MAX_UNLIMITED, AbstractPiece::DIR_BOTH_STRAIGHT);
        parent::checkDiagonal(AbstractPiece::MAX_UNLIMITED);
    }
}