<?php
namespace Route;

class Route
{
    public function start()
    {
        $route = urldecode(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));

        $routing = [
            "/"        => ['controller' => 'Home', 'action' => 'index'],
            "/article" => ['controller' => 'Home', 'action' => 'article'],
            "/edit" => ['controller' => 'Home', 'action' => 'edit'],
        ];
        if (isset($routing[$route])) {
            $controller = 'Controllers\\' . $routing[$route]['controller'];
            $controller_obj = new $controller();
            $controller_obj->$routing[$route]['action']();
        }else {
            echo 'not routes';
        }
    }
}