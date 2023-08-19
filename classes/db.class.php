<?php

class Db {
    private $host = "localhost";
    private $user = "root";
    private $pwd = "";
    private $dbName = "phonebook";

    protected function connect() {

        $conn = new mysqli($this->host, $this->user, $this->pwd, $this->dbName);

        if($conn->connect_error) {
            die("Connection Failed: " . $conn->connect_error);
        }
        
        return $conn;
        
    }
}