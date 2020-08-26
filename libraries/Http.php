<?php

class Http
{
  // :void signifie qu'elle ne retourne rien
  public static function redirect(string $url): void
  {
    header("Location: $url");
    exit();
  }
}
