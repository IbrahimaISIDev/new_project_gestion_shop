<?php
namespace Src\Core;

use Src\Core\Session;

abstract class Controller
{
    protected $session;

    public function __construct()
    {
        $this->session = new Session();
    }

    protected function renderView($view, $data = [])
    {
        extract($data);
        require_once "/var/www/html/new_project_gestion_boutique/src/App/Views/" .$view. ".php";
    }

    protected function redirect($url)
    {
        header("Location: {$url}");
        exit();
    }
}

