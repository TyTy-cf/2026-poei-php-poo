<?php

class Rook extends AbstractPiece
{

    public function __construct(string $color)
    {
        parent::__construct(5, $color);
    }

    public function move(): void {
        echo "move de Rook";
        parent::checkStraight(AbstractPiece::MAX_UNLIMITED, AbstractPiece::DIR_BOTH_STRAIGHT);
    }

}