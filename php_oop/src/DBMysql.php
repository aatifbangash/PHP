<?php

namespace MYNAMESPACE;

/**
 * Following is the normal class. It has extended the abstract class (DBAbstract).
 * dbType is the abstract method from the abstract class (DBAbstract). It is decleared here but called in the abstract class.
 */
class DBMysql extends DBAbstract
{
    public function __construct()
    {
        echo "DBMysql constructor" . "<br /><br />";
    }

    /**
     * @method connect() is overrided from the abstract class and used to the connected to the mysql database.
     */
    public function connect()
    {
        echo "Connectin to DBMysql" . "<br /><br />";
    }

    /**
     * @method dbType() is overrided from the abstract class and used to set the type of the class and called in the abstract class.
     */
    public function dbType()
    {
        return "Mysql";
    }
}
