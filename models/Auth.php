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
        if(is_null($username)){
            //login inválido
            return false;
        }else{
            //login válido
            //guardar na sessão -> username, userid, role
            //fazer um vetor auth para guardar
            $Auth = ['username','userid','role'];
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