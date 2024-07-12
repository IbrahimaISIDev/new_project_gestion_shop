<?php
namespace Src\App\Model;

use Src\Core\Database;

class ClientModel
{
    private $db;

    public function __construct()
    {
        $this->db = new Database();
    }

    public function getAllClients()
    {
        // Logique pour récupérer tous les clients
    }

    // Autres méthodes CRUD...
}