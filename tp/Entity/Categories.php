<?php


class Categories
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


    public function setId(int $id)
    {
        $this->id = $id;
    }

    public function setLabel(string $label)
    {
        $this->label = $label;
    }

    public function setDescription(string $description)
    {
        $this->description = $description;
    }
}
