<?php

include_once "DescriptionTrait.php";

trait DenominationTrait
{

    use DescriptionTrait;

    private string $label;

    public function getLabel(): string
    {
        return $this->label;
    }

    public function setLabel(string $label): void
    {
        $this->label = $label;
    }

}