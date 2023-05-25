<?php
class Auth
{
    public function __construct()
    {
        session_start();
    }

    //Devolver true
    public function checkAuth($username, $password) {
        $valid_username = 'user';
        $valid_password = 'pass123';

        if ($username == $valid_username && $password == $valid_password) {
            $_SESSION['username'] = $username;
            return true;
        } else {
            return false;
        }
    }

    //USER::find_by_username_and_password
    //Fazer as funções
    public function IsLoggedIn() {

        if (isset($_SESSION['username'])) {
            return true;
        } else {
            return false;
        }
    }

    public function getUserID()
    {
        if(isset($_SESSION['user_id'])){
            return $_SESSION['user_id'];
        }
        return null;
    }

    public function getUserName()
    {
        if(isset($_SESSION['username'])){
            return $_SESSION['username'];
        }
        return null;
    }

    public function getUserRole() //bool
    {
        if(isset($_SESSION['role'])){
            $role = $_SESSION['role'];
            if($role === 'funcionário' || $role === 'admnistrador'){
                return true;
            }
        }
        return false;
    }

    public function IsLoggedInAs($roles)
    {
        if($this->IsLoggedIn()){
            $userRole = $this->getUserRole();
            return in_array($userRole,$roles);
        }
        return false;
    }

    public function Logout()
    {
        session_destroy();
    }
}