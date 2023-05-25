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
                $this->redirectToRoute('plano','index');
            } else {
                $this->renderView('auth','index');
            }
    }

    function IsLoggedIn() {

        if (isset($_SESSION['username'])) {
            return true;
        } else {
            return false;
        }
    }

    function Logout() {
        $auth = new Auth();
        $auth->Logout();
        $this->redirectToRoute('auth','index');
    }
}
?>