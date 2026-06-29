<?php


class Models
{

    private int $id;

    private string $label;

    private string $description;

    public function getId() : int
    {
        return $this->id;
    }

    public function getLabel() : string
    {
        return $this->label;
    }

    public function getDescription() : string
    {
        return $this->description;
    }
}

$model = new Models();
