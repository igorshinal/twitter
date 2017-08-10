<?php


namespace Controllers;

use Models\Query;

class Home extends Controller
{

    public function index()
    {
        $basa_get = new Query;
        $responce_get = $basa_get->getData();
        $this->view('View', array_reverse($responce_get));
    }

    public function article()
    {

        $post_request = $_POST['body'];
        if ($_POST['body'] == '') {
            echo 1;
        }else {
            $basa = new Query;
            $responce = $basa->postData($post_request);
            $json_post = json_encode($responce);
            echo $json_post;
        }



    }

    public function edit()
    {
        $update_request = $_POST['body'];
        $update_request_id = $_POST['id'];
        if ($_POST['body'] == '') {
            echo 1;
        }else {
            $basa_update = new Query;
            $responce_update = $basa_update->updateData($update_request, $update_request_id);
            $json_update = json_encode($responce_update);
            echo $json_update;
        }
    }

}

