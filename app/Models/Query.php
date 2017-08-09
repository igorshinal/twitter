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

    public function updateData($update_body, $update_id)
    {
        $content_update_body = $update_body;
        $content_update_id = $update_id;
        $dates = date('l jS \of F Y h:i:s A');
        $query_update_1 = "INSERT INTO `post`(body, data) VALUES ('$content_update_body ', '$dates')";
        $query_update_2 = "Select id, body, data from `post` WHERE id= '$content_update_id' ";
        Singleton::getInstance()->connect($query_update_1);
        $resp_update = Singleton::getInstance()->connect($query_update_2);
        $resp_parse_update = $resp_update->fetchAll();
        return $resp_parse_update;

    }




}