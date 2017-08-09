<?php
namespace Controllers;

class Controller {

    public function view($view, $data = [])
    {
        require_once './app/Views/' . $view . '.php';
    }
    public function view_common($view)
    {
        require_once './app/Views/' . $view . '.php';
    }


}

