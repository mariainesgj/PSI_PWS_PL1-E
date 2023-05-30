<?php
class Auth
{
    public function __construct()
    {
        session_start();
    }

    public function checkAuth($username, $password)
    {
        $user = User::find_by_username_and_password($username,$password);
        if(is_null($user)){
            //login inválido
            return false;
        }else{
            //login válido
            //guardar na sessão -> username, userid, role
            //fazer um vetor auth para guardar
            $_SESSION['username'] = $user->username;
            $_SESSION['user_id'] = $user->id;
            $_SESSION['role'] = $user->role;

            return true;
        }
    }

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
        if($this->IsLoggedIn()){
            return $_SESSION['user_id'];
        }
        return null;
    }

    public function getUserName()
    {
        if($this->IsLoggedIn()){
            return $_SESSION['username'];
        }
        return null;
    }

    public function getUserRole()
    {
        if($this->IsLoggedIn()){
            return $_SESSION['role'];
        }
        return '';
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