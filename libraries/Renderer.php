<?php

class Renderer
{
  public static function render(string $path, array $variables = []): void
  {
    extract($variables);

    ob_start(); // tampon
    require($path);
    $pageContent = ob_get_clean();

    require('templates/layout.html.php');
  }
}
