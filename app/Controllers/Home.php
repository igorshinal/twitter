<?php


namespace Controllers;

use Models\Query;

class Home extends Controller
{

    public function index()
    {
        return $this->view('View');
    }

    public function set()
    {
        if (empty($_POST['currency'])) {
            echo 'You must type a currency';
        }




    }
}

