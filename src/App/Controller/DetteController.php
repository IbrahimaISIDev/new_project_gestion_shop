<?php

namespace App\Controller;

use App\Model\DetteModel;

class DetteController
{
    private $detteModel;

    public function __construct($detteModel)
    {
        $this->detteModel = $detteModel;
    }

    public function listerDettesParClient($clientId)
    {
        $dettes = $this->detteModel->obtenirDettesParClientId($clientId);
        foreach ($dettes as &$dette) {
            $dette['articles'] = $this->detteModel->obtenirArticlesParDetteId($dette['id']);
            $dette['paiements'] = $this->detteModel->obtenirPaiementsParDetteId($dette['id']);
        }
        // Rendre la vue avec les détails des dettes du client
    }
}
