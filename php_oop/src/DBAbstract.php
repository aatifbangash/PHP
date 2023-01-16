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
    /**
     * @method connect() overrided from the interface and also decleared as a abstract for sub-classes.
     */
    abstract public function connect();

    /**
     * @method dbType() is abstract method to be declared in all the sub-classes. and will be called in the abstract class.
     */
    abstract public function dbType();

    /**
     * @method create() overrided from the interface and treated as a normal method. It is being used as a shared method
     * accross all the sub-classes.
     */
    public function create(array $data)
    {
        /** @var $this->dbType() is set in the child class but called here in the abstract class */
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
