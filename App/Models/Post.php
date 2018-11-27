<?php

namespace App\Models;

use PDO;

/**
 * Post model
 * 
 * PHP Version at least 5.4
 */
class Post extends \Core\Model
{
    /**
     * Get all the posts as an associative array
     * 
     * @return array
     */
    public static function getAll()
    {

        try{
            $db = static::getDB();
            
            $sql = 'SELECT id, title, content FROM posts ORDER BY created_at';

            $stmt = $db->query($sql);

            $results = $stmt->fetchAll(PDO::FETCH_ASSOC);

            return $results;

        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }
}