<?php

namespace App\Model;

class DetteModel
{
    private $pdo;

    public function __construct($pdo)
    {
        $this->pdo = $pdo;
    }

    public function obtenirDettesParClientId($clientId)
    {
        $stmt = $this->pdo->prepare("SELECT * FROM dettes WHERE client_id = :client_id");
        $stmt->execute(['client_id' => $clientId]);
        return $stmt->fetchAll();
    }

    public function obtenirArticlesParDetteId($detteId)
    {
        $stmt = $this->pdo->prepare("SELECT a.*, da.quantite FROM articles a INNER JOIN dettes_articles da ON a.id = da.article_id WHERE da.dette_id = :dette_id");
        $stmt->execute(['dette_id' => $detteId]);
        return $stmt->fetchAll();
    }

    public function obtenirPaiementsParDetteId($detteId)
    {
        $stmt = $this->pdo->prepare("SELECT * FROM paiements WHERE dette_id = :dette_id");
        $stmt->execute(['dette_id' => $detteId]);
        return $stmt->fetchAll();
    }
}
