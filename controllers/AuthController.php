<?php
require_once 'models/Auth.php';
require_once 'controllers/Controller.php';

class AuthController extends Controller{

    public function index()
    {
        $this->renderView('auth','index');
    }

    public function login()
    {
        $username = $this->getHTTPPostParam('user');
        $password = $this->getHTTPPostParam('pass');

        $auth = new Auth();

        if ($auth->checkAuth($username, $password)) {
            $loggedInRoles = $auth->getLoggedInRoles();

            if (in_array('funcionario', $loggedInRoles)) {
                $this->redirectToRoute('BOController');
                echo "funcionario";
            } else if (in_array('cliente', $loggedInRoles)) {
                $this->redirectToRoute('FOController');
                echo "cliente";
            }
        } else {
            $this->renderView('auth', 'index');
        }
    }

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

    public function Logout() {
        $auth = new Auth();
        $auth->Logout();
        $this->redirectToRoute('auth','index');
    }
}
?>