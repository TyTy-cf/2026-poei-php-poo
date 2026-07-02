<?php

abstract class AbstractForm implements JsonSerializable
{

    public function jsonSerialize(): array
    {
        return get_object_vars($this);
    }

    abstract public function getArea(): float;

}