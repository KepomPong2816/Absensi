<?php
class UserModel {
    private $db;

    public function __construct($db) {
        $this->db = $db;
    }

    public function getUser($username, $password) {
        // Gantilah dengan query yang sesuai untuk mendapatkan data pengguna dari database.
        $query = "SELECT * FROM users WHERE username = :username AND password = :password";
        $stmt = $this->db->prepare($query);
        $stmt->bindParam(':username', $username);
        $stmt->bindParam(':password', $password);
        $stmt->execute();

        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        return $user;
    }
}


//$host = 'localhost'; 
//$username = 'root'; 
//$password = ''; 
//$database = 'db_pw';

//$pdo = new PDO('mysql:host='.$host.';dbname='.$database, $username, $password);
?>