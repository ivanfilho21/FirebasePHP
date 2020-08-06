<?php

namespace App;

use Kreait\Firebase\Factory;

class Database
{

    private static $instance = null;
    private $database = null;

    private function __construct()
    {
        //$factory = (new Factory())->withDatabaseUri('https://teste-d2153-firebaseio.com');
        $factory = (new Factory())
            ->withServiceAccount(ROOT.'secretkey/teste-d2153-credentials.json');

        $this->database = $factory->createDatabase();
    }

    static function getInstance()
    {
        if (self::$instance == null) {
            self::$instance = new Database();
        }

        return self::$instance;
    }

    function getConnection()
    {
        return $this->database;
    }

}