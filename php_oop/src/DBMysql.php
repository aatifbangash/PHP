<?php

namespace MYNAMESPACE;

class DBMysql extends DBAbstract
{
    public function __construct()
    {
        echo "DBMysql constructor" . "<br /><br />";
    }

    public function connect()
    {
        echo "Connectin to DBMysql" . "<br /><br />";
    }

    public function dbType()
    {
        return "Mysql";
    }
}
