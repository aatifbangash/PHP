<?php

namespace MYNAMESPACE;

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
