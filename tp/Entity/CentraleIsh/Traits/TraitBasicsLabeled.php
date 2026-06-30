<?php

namespace CentraleIsh\Traits;
include_once "TraitBasics.php";

trait TraitBasicsLabeled
{
    use TraitBasics;
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