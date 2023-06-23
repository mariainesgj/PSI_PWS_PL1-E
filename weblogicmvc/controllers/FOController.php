<?php
require_once 'models/User.php';
require_once 'controllers/Controller.php';

class FOController extends Controller
{
    public function __construct()
    {
        $roles = ['cliente'];
        $this->authenticationFilterAllows($roles);
    }
    public function index()
    {
        $this->renderView('fo', 'index', [], 'FO');
    }

    public function dashboard()
    {
        $this->renderView('fo', 'index', [], 'FO');
    }

    public function emitirfo()
    {
        $this->renderView('folhaobra', 'create', [], 'FO');
    }

    public function foemitidas()
    {
        $this->renderView('folhaobra', 'index', [], 'FO');
    }

    public function registoclientes()
    {
        $this->renderView('fo', 'registoclientes', [], 'FO');
    }

    public function servicos()
    {
        $this->renderView('servico', 'index', [], 'FO');
    }

    public function iva()
    {
        $this->renderView('iva', 'index', [], 'FO');
    }
}
