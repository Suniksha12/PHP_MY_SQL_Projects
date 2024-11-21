<?php
class Database {
    private $dbserver = 'localhost';
    private $dbuser = 'root';
    private $dbpassword = '';
    private $dbname = 'signupforms';
    protected $conn;

    // Constructor
    public function __construct() {
        try {
            $dsn = "mysql:host={$this->dbserver};dbname={$this->dbname};charset=utf8";
            $options = array(
                PDO::ATTR_PERSISTENT => true, // Set persistent connection
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION // Set error mode to exception
            );
            $this->conn = new PDO($dsn, $this->dbuser, $this->dbpassword, $options);
        } catch (PDOException $e) { // Corrected here
            echo "Connection Error: " . $e->getMessage();
        }
    }
}
?>