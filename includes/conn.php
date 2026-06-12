<?php
error_reporting(1);
$dbserver = 'localhost';
$user = 'u970775762_digitaljourney';
$pass = 'Digitaljourney@2025';
$db = 'u970775762_digitaljourney';
$conn2=new mysqli($dbserver, $user,$pass,$db) or die("error");
    if ($conn2->connect_error) {
      die("Connection failed: " . $conn2->connect_error);
}
        
Class Database {

    private $server = "mysql:host=localhost;dbname=u970775762_digitaljourney";
    private $username = "u970775762_digitaljourney";
    private $password = "Digitaljourney@2025";
    
    private $options = array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,);
    protected $conn;

    public function open() {
        try {
            $this->conn = new PDO($this->server, $this->username, $this->password, $this->options);
            return $this->conn;
        } catch (PDOException $e) {
            echo "There is some problem in connection: " . $e->getMessage();
        }
    }

    public function close() {
        $this->conn = null;
    }

}

$pdo = new Database();
?>