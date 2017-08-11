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
            $handler = new PDO('mysql:host=us-cdbr-iron-east-05.cleardb.net;dbname=heroku_1bfca7da781d565', 'b1f0985d61e157', 'ac02b48f');

            $handler->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            echo $e->getMessage();
            die();
        }

        $query = $handler->query($q);

        return $query;

    }


}