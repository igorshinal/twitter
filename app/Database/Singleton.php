<?php
namespace Database;
use PDO;

class Singleton {
    private static
        $instance = null;
    /**
     * @return Singleton
     */
    public static function getInstance()
    {
        if (null === self::$instance)
        {
            self::$instance = new self();
        }
        return self::$instance;
    }
    private function __clone() {}
    private function __construct() {}
    public function connect($q)
    {
        try {
            $handler = new PDO('mysql:host=127.0.0.1;dbname=twitter', 'root', '000');
            $handler->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            echo $e->getMessage();
            die();
        }

        $query = $handler->query($q);

        return $query;

    }


}