<?php

namespace MYNAMESPACE;
/**
 * Following is the normal class. It has extended the abstract class (DBAbstract).
 * dbType is the abstract method from the abstract class (DBAbstract). It is decleared here but called in the abstract class.
 */
class DBMongo extends DBAbstract
{
    public function __construct()
    {
        echo "DBMongo constructor" . "<br /><br />";
    }

    public function connect()
    {
        echo "Connectin to DBMongo" . "<br /><br />";
    }

    public function dbType()
    {
        return "Mongo";
    }
}
