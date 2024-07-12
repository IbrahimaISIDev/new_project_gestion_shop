<?php

namespace App\Controller;

use App\Model\ClientModel;

class ClientController
{
    private $clientModel;

    public function __construct($clientModel)
    {
        $this->clientModel = $clientModel;
    }

    public function listerClients()
    {
        $clients = $this->clientModel->getAllClients();
        // Rendre la vue avec la liste des clients
    }

    public function afficherClient($clientId)
    {
        $client = $this->clientModel->getClientById($clientId);
        // Rendre la vue avec les détails du client
    }

    public function ajouterClient($data)
    {
        $this->clientModel->addClient($data);
        // Rediriger vers la liste des clients ou afficher un message de succès
    }
}
