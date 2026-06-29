<?php

function dump(mixed $data): void
{
  echo '<pre>';
  var_dump($data);
  echo '</pre>';
}

function console_log(mixed $data): void
{
  echo '<script>';
  echo 'console.log(' . json_encode($data) . ');';
  echo '</script>';
}
