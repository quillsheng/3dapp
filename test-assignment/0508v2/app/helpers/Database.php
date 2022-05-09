<?php
/**
 * Databases
 */

namespace app\helpers;

class Database
{
    public static function connexion($db)
    {
        try {
            $pdo = new \PDO('sqlite:data/myapp.db');

        } catch (PDOException $e) {
            API::error(404, 'Cannot connect to database');
            return false;
        }

        return $pdo;
    }
}
