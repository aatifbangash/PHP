<?php

namespace MYNAMESPACE;
/**
 * Interface is like a template/contract for the class. 
 * Classes implement the interface will must implement/define all the methods mentioned in the interface.
 * Example of the interface is like Qutation for the computer system to be build.
 */
interface DBInterface
{
    public function create(array $data);
    public function connect();
}
