<?php

class Piece
{

    protected static int $ID = 0;

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

    public function move(): void {
        echo "move de Piece";
    }

}