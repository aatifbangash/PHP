<?php

namespace MYNAMESPACE;
/**
 * abstract class is same as the normal class. But we cann't create the Object for abstract class.
 * abstract class can only be extended. It can also implement the interface same as normal class.
 * abstract class can have normal methods or abstract methods.
 * Normal methods are the methods which are the shared accross the sub-classes.
 * abstract methods are the methods which will must be defined in all the sub-classes.
 * Example for the abstract class is like the computer system without processor. And leave it to the owner/user whatever processor
 * he/she want to install in it.
 * 
 * in the abstract class the methods dbType() and connect() are being set in the child classes. And accessed in the abstract class.
 */
abstract class DBAbstract implements DBInterface
{
    abstract public function connect();
    abstract public function dbType();

    public function create(array $data)
    {
        if ($this->dbType() == "Mysql") {

            $sql = "SQL:- Insert INTO User SET ";
            foreach ($data as $k => $v) {
                $sql .= "$k = '$v', ";
            }
            echo rtrim($sql, ", ") . "<br /><br />";
        } elseif ($this->dbType() == "Mongo") {

            echo "<pre>";
            print_r($data);
            echo "<br /><br />";
        }
    }
}
