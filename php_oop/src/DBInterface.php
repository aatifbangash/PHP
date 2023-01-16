<?php

namespace MYNAMESPACE;

/**
 * Interface is like a template/contract for the class. 
 * Classes implement the interface will must implement/define all the methods mentioned in the interface.
 * Example of the interface is like Qutation for the computer system to be build.
 */
interface DBInterface
{
    /**
     * @method create() this will be used to create new record in the database.
     */
    public function create(array $data);

    /**
     * @method connect() this will be used to connect to the database. either MongoDB or Mysql.
     */
    public function connect();
}
