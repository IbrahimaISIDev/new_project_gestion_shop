<?php
namespace Src\App\Controller;

use Src\Core\Controller;
use Src\App\Model\ClientModel;

class ClientController extends Controller
{
    public function index()
    {
        $clientModel = new ClientModel();
        $clients = $clientModel->getAllClients();
        $this->renderView('clients/index', ['clients' => $clients]);
    }

    // Autres méthodes...
}