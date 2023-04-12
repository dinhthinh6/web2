<?php
class Connection
{
    private static $instance = null;
    private static $conn = null;
    private $dbname = "wednangcao";
    private $host = "localhost";
    private $user ="root";
    private $pass = "";


    private function __construct()
    {
        self::$conn = mysqli_connect($this->host,$this->user,$this->pass);
        mysqli_select_db(self::$conn,$this->dbname);
        echo "KET NOI DB";

    }

    public static function getInstance()
    {
        if (self::$instance == null) {
            $connection = new Connection();
            self::$instance = self::$conn;
        }

        return self::$instance;
    }
}