<?php
namespace Src\Core;

class Database
{
    private $connection;

    public function __construct()
    {
        $this->connection = new \PDO(
            "mysql:host=" . $_ENV['DB_HOST'] . ";dbname=" . $_ENV['DB_NAME'],
            $_ENV['DB_USER'],
            $_ENV['DB_PASS']
        );
    }

    // Méthodes pour les requêtes...
}