<?php
require_once "./vendor/autoload.php";

use MYNAMESPACE\DBMysql;
use MYNAMESPACE\DBMongo;
use MYNAMESPACE\DBInterface;

class userController
{
    private $db;
    public function __construct()
    {
        echo "userController constructor" . "<br /><br />";
    }

    public function setDB(DBInterface $db)
    {
        $this->db = $db;
    }

    public function registerUser(array $data)
    {
        $this->db->connect();

        $this->db->create($data);
    }
}


$user = new userController();
$user->setDB((new DBMysql()));
// $user->setDB((new DBMongo()));
$user->registerUser($_GET);
