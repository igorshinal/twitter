<?php


namespace Controllers;

use Models\Query;

class Home extends Controller
{

    public function index()
    {
        $this->view('View',  []);
    }
    public function article()
    {
        echo 'article';
    }

}

