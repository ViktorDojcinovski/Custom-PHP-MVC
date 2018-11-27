<?php

namespace Core;

use PDO;

/**
 * Base model
 * 
 */

abstract class Model 
{

    /**
     * Get the PDO database connection
     * 
     * @return mixed
     */
    protected static function getDB() 
    {
        static $db = null;

        if($db === null) {
            $host = 'localhost';
            $db_name = 'mvc';
            $username = 'mvc_admin';
            $password = 'Edju6K6aUNl1Ti7I';

            try{
                $db = new PDO( "mysql:host=$host;dbname=$db_name;charset=utf8", $username, $password );
    
                return $db;
    
            } catch (PDOException $e) {
                echo $e->getMessage();
            }
        }
    }
}