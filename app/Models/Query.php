<?php

namespace Models;
use Database\Singleton;

class Query
{
    public function getData()
    {
        $query = "Select * from `post`";
        $res = Singleton::getInstance()->connect($query);
        return $res;

    }





}