<?php

namespace Models;
use Database\Singleton;

class Query
{
    public function postData($bo)
    {
        $content = $bo;
        $dates = date('l jS \of F Y h:i:s A');
        $query_0 = "INSERT INTO `post`(body, data) VALUES ('$content', '$dates')";
        $query_get = "Select id, body, data from `post` WHERE data= '$dates' ";
        Singleton::getInstance()->connect($query_0);
        $resp = Singleton::getInstance()->connect($query_get);
        $resp_parse = $resp->fetchAll();
        return $resp_parse;

    }

    public function getData()
    {
        $query_1 = "Select * from `post` order by id  DESC limit 2";
        $res = Singleton::getInstance()->connect($query_1);
        $row = $res->fetchAll();

        return $row;

    }




}