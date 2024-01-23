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
                $connect_var->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
                $connect_var->setAttribute(\PDO::ATTR_DEFAULT_FETCH_MODE, \PDO::FETCH_ASSOC);
                self::$connection = $connect_var;
                return self::$connection;
            }
        } catch (\PDOException $e) {
            echo $e->getMessage();
            exit;
        }
    }
}
