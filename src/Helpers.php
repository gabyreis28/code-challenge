<?php

function asset(string $path): string
{
  return SITE["root"] . "/src/views/assets/{$path}";
}
