<?php
require_once 'models/Auth.php';
require_once 'controllers/Controller.php';

class AuthController extends Controller{

    public function index()
    {
        $this->renderView('auth','index',[],'login');
    }

    public function login()
    {
        $username = $this->getHTTPPostParam('user');
        $password = $this->getHTTPPostParam('pass');

        $auth = new Auth();

        if ($auth->checkAuth($username, $password)) {

        } else {
            //$this->renderView('auth', 'index');
        }
    }
    public function Logout() {
        $auth = new Auth();
        $auth->Logout();
        $this->redirectToRoute('auth','index');
    }
}
?>