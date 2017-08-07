<?php
namespace Controllers;

use Models\Query;

class Home extends Controller
{
    public function index()
    {
        $getData = new Query;
        $result = $getData->getData();

        $this->view('View', $result);
    }
}

