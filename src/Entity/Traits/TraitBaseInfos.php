<?php

use Entity\Traits\TraitDescription;

include_once 'TraitDescription.php';

trait TraitBaseInfos
{
    use TraitDescription;
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