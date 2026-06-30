<?php

namespace CentraleIsh\Traits;
include_once "TraitBasics.php";

trait TraitBasicsTitled
{
    use TraitBasics;
    private string $title;

    public function getTitle(): string
    {
        return $this->title;
    }

    public function setTitle(string $title): void
    {
        $this->title = $title;
    }
}