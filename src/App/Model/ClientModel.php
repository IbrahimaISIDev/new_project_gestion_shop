<?php

namespace App\Model;

class ClientModel
{
    private $pdo;

    public function __construct($pdo)
    {
        $this->pdo = $pdo;
    }

    public function getAllClients()
    {
        $stmt = $this->pdo->query("SELECT * FROM clients");
        return $stmt->fetchAll();
    }

    public function getClientById($clientId)
    {
        $stmt = $this->pdo->prepare("SELECT * FROM clients WHERE id = :id");
        $stmt->execute(['id' => $clientId]);
        return $stmt->fetch();
    }

    public function addClient($data)
    {
        $stmt = $this->pdo->prepare("INSERT INTO clients (nom, prenom, email, telephone, photo) VALUES (:nom, :prenom, :email, :telephone, :photo)");
        return $stmt->execute($data);
    }
}
