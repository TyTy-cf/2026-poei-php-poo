<?php

function dump(mixed $data): void
{
    echo '<pre>';
    var_dump($data);
    echo '</pre>';
}


function dateFormat(DateTime $date, string $format = 'd/m/Y'): string
{
    return $date->format($format);
}
