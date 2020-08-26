<?php

class Application
{
  public static function process()
  {
    $controllerName = "Article";
    $task = "index";

    if(!empty($_GET['controller'])){
      // GET => article (uppercasefirst)
      $controllerName = ucfirst($_GET['controller']);
    }

    if(!empty($_GET['task'])){
      $task = $_GET['task'];
    }

    $controllerName = "\Controllers\\" . $controllerName;

    $controller = New $controllerName();
    $controller->$task();
  }
}