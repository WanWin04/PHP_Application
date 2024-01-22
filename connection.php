<?php
class Connection
{
    public static $connection = false;

    private function __construct()
    {
        
    }

    public static function connect($config)
    {
        try {
            if (!self::$connection) {
                $connect_var = new PDO("mysql:host={$config['server']};dbname={$config['dbname']}", $config['dbuser'], $config['dbpass']);
            }
        } catch (\PDOException $e) {
        }
    }
}
