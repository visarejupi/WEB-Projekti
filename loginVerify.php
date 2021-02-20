<?php
require_once 'userMapper.php';
include_once 'simpleUserClass.php';

session_start();

if (isset($_POST['login-btn'])) {
    $login = new LoginLogic($_POST);
    $login->verifyData();
} else if (isset($_POST['signup-btn'])) {
    $signup = new SignupLogic($_POST);
    $signup->signupUser();
} else {
    header("Location:../views/login.php");
}
 
class LoginLogic
{
    private $username = "";
    private $password = "";

    public function __construct($formData)
    {
        $this->username = $formData['username'];
        $this->password = $formData['password'];
    }

    public function verifyData()
    {
        if ($this->variablesNotDefinedWell($this->username, $this->password)) {
            header("Location:../views/login.php");
        } else if ($this->usernameAndPasswordCorrect($this->username, $this->password)) {
            header('Location:../views/index.php');
        } else {
            header("Location:../views/login.php");
        }
    }

    private function variablesNotDefinedWell($username, $password)
    {
        if (empty($username) || empty($password)) {
            return true;
        }
        return false;
    }

    private function usernameAndPasswordCorrect($username, $password)
    {
        $mapper = new UserMapper();
        $user = $mapper->getUserByUsername($username);
        if ($user == null || count($user) == 0) return false;
        else if (password_verify($password, $user['password'])) {
            if ($user['role'] == 1) {
                $obj = new Admin($user['id'], $user['username'], $user['password'], $user['role']);
                $obj->setSession();
            } else {
                $obj = new SimpleUser($user['id'], $user['username'], $user['password'], $user['role'], "");
                $obj->setSession();
            }
            return true;
        } else return false;
    }
}

class SignupLogic
{
    private $username = "";
    private $password = "";
    private $email = "";

    public function __construct($formData)
    {
        $this->username = $formData['signup-username'];
        $this->password = $formData['signup-password'];
        $this->email = $formData['signup-email'];
    }

    public function signupUser()
    {
        $user = new SimpleUser($this->username, $this->password, 0, $this->email);

        $mapper = new UserMapper();
        $mapper->insertUser($user);
        header("Location:../views/index.php");
    }
}
