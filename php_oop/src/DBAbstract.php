<?php

namespace MYNAMESPACE;

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
