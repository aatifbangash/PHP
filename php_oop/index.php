<?php
require_once "./vendor/autoload.php";

/**
 * Include the namespace of class or interface to be used in the script.
 */
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

    /**
     * Following the setter for DB class.
     * DBInterface typeHint is not a class but the interface. Classes implemented the interface (DBInterface) can be passed as 
     * an argument to setDB method. Like (DBMysql or DBMongo).
     */
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
/**
 * (new DBMysql()) is the used to create the instance of the DBMysql class.
 * instance of the DBMysql class is passed as a param to setDB() setter.
 * instance of the DBMongo class can also be passed as a param because both classes has implemented the DBInterface.
 */
$user->setDB((new DBMysql()));
// $user->setDB((new DBMongo()));
$user->registerUser($_GET);

/**
 * Type the following URL in the browser to view the response.
 * http://localhost:8085/?name=atif&email=atif@codenterprise.com
 */