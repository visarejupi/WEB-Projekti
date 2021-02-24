<?php
require_once "databaseConfig.php";

class UserMapper extends DatabaseConfiguration
{

    private $conn;
    private $query;

    public function __construct()
    {
       $this->conn = $this->getConnection();
    }

    public function getUserByID($userId)
    {
        $query = "select * from user where userid=:id";
        $statement = $this->conn->prepare($query);
        $statement->bindParam(":id", $userId);
        $statement->execute();
        return $result = $result = $statement->fetch(PDO::FETCH_ASSOC);

    }

    public function insertUser(\SimpleUser$user)
    {
        $query = "insert into user(username,userlastname,password,role) values (:name,:lastname,:pass,:role)";
        $statement = $this->conn->prepare($query);

      $username = $user->getUsername();
      $lastname = $user->getLastname();
      $pass = $user -> getPassword();
      $role = $user -> getRole();

      $passwordEncrypted = password_hash($pass, PASSWORD_BCRYPT);

        $statement->bindParam(":name",$username);
        $statement->bindParam(":lastname", $lastname);
        $statement->bindParam(":pass",$passwordEncryptedrd);
        $statement->bindParam(":role", $role);
        
        $statement->execute();
    }

    public function getUserByUsername($username)
    {
        $query = "select * from user where username=:username";
        $statement = $this->conn->prepare($query);
        $statement->bindParam(":username", $username);
        $statement->execute();
        $result = $statement->fetch(PDO::FETCH_ASSOC);
        return $result;
    }

    public function getAllUsers()
    {
        $query = " select * from user";

        $statement = $this->conn->prepare($this->query);
        $statement->execute();
        $result = $statement->fetchAll();
        
        return $result;

    }
    public function deleteUser($userId)
    {
        $this->query = "delete from user where userid=:id";
        $statement = $this->conn->prepare($this->query);
        $statement->bindParam(":id", $userId);
        $statement->execute();
    }
}