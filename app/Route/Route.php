<?php
namespace Route;

class Route
{
    public function start()
    {
        $route = urldecode(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));

        $routing = [
            "/"        => ['controller' => 'Home', 'action' => 'index'],
            "/set"        => ['controller' => 'Home', 'action' => 'set'],
            "/curl"        => ['controller' => 'Currency', 'action' => 'cURL'],
        ];
        if (isset($routing[$route])) {
            $controller = 'Controllers\\' . $routing[$route]['controller'];
            $controller_obj = new $controller();
            $index = $routing[$route]['action'];
            $controller_obj->$index();
        }else {
            echo 'not routes';
        }
    }
}