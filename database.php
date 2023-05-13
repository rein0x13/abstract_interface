<?php

class Database {

    public static function connect($dbname) {
        $conn = new mysqli('localhost', 'root', '');
        $conn->query('CREATE DATABASE IF NOT EXISTS $dbname');
        $conn->query('USE $dbname');
        return $conn;
    }
}

?>