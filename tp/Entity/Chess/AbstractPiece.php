<?php

abstract class AbstractPiece
{

    protected static int $ID = 0;
    protected const int MAX_UNLIMITED = 64;
    protected const int DIR_HORIZONTAL = 0;
    protected const int DIR_VERTICAL = 1;
    protected const int DIR_BOTH_STRAIGHT = 2;

    protected int $id;

    protected int $value;

    protected string $color;

    protected string $image;

    /**
     * @param int $value
     * @param string $color
     */
    public function __construct(int $value, string $color)
    {
        $this::$ID++;
        $this->id = $this::$ID;
        $this->value = $value;
        $this->color = $color;
        $this->image = 'assets/chess/' . strtolower($this::class) . '-' . $color . '.png';
    }


    public function getValue(): int
    {
        return $this->value;
    }

    public function getColor(): string
    {
        return $this->color;
    }

    public function getImage(): string
    {
        return $this->image;
    }

    public function getId(): int
    {
        return $this->id;
    }

    protected function checkDiagonal(int $max): void
    {
        echo "<br>";
        echo "checkDiagonal on " . $max;
    }

    protected function checkStraight(int $max, int $dir): void
    {
        echo "<br>";
        echo "checkStraight on " . $max . " for dir " . $dir;
        if ($dir === AbstractPiece::DIR_BOTH_STRAIGHT) {
            // code for both
        } else if ($dir === AbstractPiece::DIR_HORIZONTAL) {
            // code for HORIZONTAL
        }
    }

    abstract public function move(): void;

}