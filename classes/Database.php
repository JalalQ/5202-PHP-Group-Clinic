<?php

namespace PHP\Classes;

class Database {

    private static $user = "root";
    private static $pass = "root";
    private static $dsn ="mysql:host=localhost;dbname=qc_health_clinic";
    private static $dbcon;

    private function __construct() {

    }

    //get pdo connection
    public static function getDb(){
        if(!isset(self::$dbcon)) {
            try {
                self::$dbcon = new \PDO(self::$dsn, self::$user, self::$pass);
                self::$dbcon->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
                self::$dbcon->setAttribute(\PDO::ATTR_DEFAULT_FETCH_MODE, \PDO::FETCH_OBJ);
            } catch (\PDOException $e) {
                $msg = $e->getMessage();
                include 'pages/custom-error.php';
                exit();
            }
        }

        return self::$dbcon;
    }

}