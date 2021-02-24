<?php
require_once 'userMapper.php';
include_once 'simpleUserClass.php';
include_once 'userMapper.php';

session_start();

if (isset($_POST['login-btn'])) {
    $login = new LoginLogic($_POST);
    $login->verifyData();
} else if (isset($_POST['register-btn'])) {

    $register = new RegisterLogic($_POST);
    $register->registerUser();
} else {
    header("login.php");
}
 
class LoginLogic
{
    private $email = "";
    private $password = "";

    public function __construct($formData)
    {
        $this->email = $formData['login-email'];
        $this->password = $formData['login-password'];
    }

    public function verifyData()
    {
        if ($this->variablesNotDefinedWell($this->email, $this->password)) {
            header(" login.php");
        } else if ($this->usernameAndPasswordCorrect($this->email, $this->password)) {
            header(' index.php');
        } else {
            header(" login.php");
        }
    }

    private function variablesNotDefinedWell($email, $password)
    {
        if (empty($email) || empty($password)) {
            return true;
        }
        return false;
    }

    private function usernameAndPasswordCorrect($email, $password)
    {
      $mapper = new UserMapper();
      $user = $mapper->getUserByUsername($email);
         
      if($user == null) return false;
      if(password_verify($password,$user['password'])){
        return true;
      }
      return false;
    }
}

class RegisterLogic
{
    private $username = "";
    private $password = "";
    private $lastname = "";
    private $email="";

    public function __construct($formData)
    {
        $this->username = $formData['register-username'];
        $this->password = $formData['register-password'];
        $this->lastname = $formData['register-lastname'];
        $this->email = $formData['register-email'];

    }


    public function registerUser()
    {

        $user =new SimpleUser($this->username,$this->password,20,0,$this->lastname);
        $mapper = new UserMapper();
        $mapper->insertUser($user);
        header("index.php");

}
}
