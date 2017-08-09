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
//        $this->view_common('View');
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

}

