<?php
namespace Route;

class Route
{
    public function __construct()
    {
        $url = $this->parseUrl();
    }
    public function parseUrl() {
        if (isset($_GET['url'])) {
        return $url = explode('/', filter_var(rtrim($_GET['url'], '/'), FILTER_SANITIZE_URL));

        }
    }
}