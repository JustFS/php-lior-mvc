<?php

class Database
{
  public static function getPdo(): PDO
  {
    /**
     * 1. Connexion à la base de données avec PDO
     * Attention, on précise ici deux options :
     * - Le mode d'erreur : le mode exception permet à PDO de nous prévenir violament quand on fait une connerie ;-)
     * - Le mode d'exploitation : FETCH_ASSOC veut dire qu'on exploitera les données sous la forme de tableaux associatifs
     */
    $pdo = new PDO('mysql:host=localhost:3308;dbname=blogpoo;charset=utf8', 'root', '', [
      PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
      PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
    ]);
  
    return $pdo;
  }
}