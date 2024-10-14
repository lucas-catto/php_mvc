<?php

// include('Models/User.php');

class UserDAO
{
    private $conn;

    public function __construct()
    {
        $this->conn = new PDO('mysql:host=localhost;dbname=php_mvc', 'root', '130830');
    }

    public function insert(User $user)
    {
        $sql = "INSERT INTO users VALUES (null, ?, ?, ?, ?) ";

        $stmt = $this->conn->prepare($sql);

        $stmt->bindValue(1, $user->name);
        $stmt->bindValue(2, $user->username);
        $stmt->bindValue(3, $user->email);
        $stmt->bindValue(4, $user->password);
        $stmt->execute();
    }

    public function update(User $user)
    {

    }

    public function select()
    {
        $sql = "SELECT * FROM users";

        $stmt = $this->conn->prepare($sql);
        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_CLASS);
    }

    public function delete()
    {
        
    }
}
