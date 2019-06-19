<?php 
namespace Apr\CrackingCode;

abstract class Config
{
    private static $config;
    private static $dbConnection;

    private static function getConfig() {
        if (self::$config) {
            return self::$config;
        }
        
        return self::$config = require __DIR__ . '/../config/config.php';
      
    }
    public static function get($property) 
    {
        if (!array_key_exists($property, self::getConfig())) {
            return;
        }
        return self::getConfig()[$property];
    }

    public static function getDbConnection()
    {
        if (self::$dbConnection) {
            return self::$dbConnection;
        }

        $database = self::get('database');

        if ($database['type'] === 'sqlite') {
            $dsn = $database['type'] . ':' . __DIR__ . '/../' . $database['host'];
            $username = "root";
            $password = "";
            return new \PDO($dsn, $username, $password);
        }
    }   
}