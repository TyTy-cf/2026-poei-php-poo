<?php

function dump(mixed $data): void
{
    echo '<pre>';
    var_dump($data);
    echo '</pre>';
}

function dateFormat (DateTime $date): string
{
    return $date->format('d/m/Y');
}
