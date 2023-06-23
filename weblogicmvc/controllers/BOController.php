<?php
require_once 'controllers/Controller.php';

class BOController extends Controller
{

    public function __construct()
    {
        $roles = ['admin', 'funcionario'];
        $this->authenticationFilterAllows($roles);
    }

    public function index()
    {
        $this->renderView('bo', 'index', [], 'default');
    }
/*
    public function dashboard()
    {
        $this->renderView('bo', 'index', [], 'default');
    }

    public function emitirfo()
    {
        $this->renderView('folhaobra', 'create', [], 'default');
    }

    public function foemitidas()
    {
        $this->renderView('folhaobra', 'index', [], 'default');
    }

    public function registoclientes()
    {
        $this->renderView('bo', 'registoclientes', [], 'default');
    }

    public function users()
    {
        $this->renderView('user', 'index', [], 'default');
    }

    public function servicos()
    {
        $this->renderView('servico', 'index', [], 'default');
    }

    public function iva()
    {
        $this->renderView('iva', 'index', [], 'default');
    }

    public function empresa()
    {
        $this->renderView('empresa', 'index', [], 'default');
    }*/
}
?>
