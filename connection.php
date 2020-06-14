<?php
class DB{
    private $host;
    private $db
    private $user
    private $password
    private $charser
    public function construct(){
        $this->host     = 'localhost';
        $this->db       = 'ev2';
        $this->user     = 'root';
        $this->password = '';
        $this->charset  = 'utf8mb4';
    }
    function connect(){
        try {
            //code...
            $connection = "mysql:host =". $this->host."db=" . $this=>db . "charset=" . $this->charset;
            $options =[
                PDO:: ATTR_ERRMODE          => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_EMULATE_PREPARES  = false,
            ];

            $pdo = new PDO (connection, $this->user, $this->password);

            return $pdo;
        } catch (PDOException $e) {
            //throw $th;
            print_r('Error Connection: ' .$e->intl_get_error_message());
        }
    }
}