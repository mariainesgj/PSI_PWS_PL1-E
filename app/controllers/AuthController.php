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
            // Obter a função (role) do usuário
            $role = $auth->getUserRole($username); // Substitua pela lógica correta para obter a função do usuário

            // Redirecionar para a página apropriada com base na função (role)
            if ($role === 'cliente') {
                $this->redirectToRoute('fo', 'index'); // Redirecionar para o controlador e ação adequados do Front Office (cliente)
            } else {
                $this->redirectToRoute('bo', 'index'); // Redirecionar para o controlador e ação adequados do layout padrão (admin e funcionário)
            }
        } else {
            $data['error_message'] = 'Credenciais inválidas';
            $this->renderView('auth', 'index', $data, 'login');
        }
    }
    public function logout() {
        $auth = new Auth();
        $auth->Logout();
        $this->redirectToRoute('auth','index');
    }
}
?>