<?php
header('Content-type: application/json');

class Database 
{
    public $conn;

    public function __construct()
    {
        $this->conn = new mysqli('localhost','root','','dashboard');
    }
}
?>