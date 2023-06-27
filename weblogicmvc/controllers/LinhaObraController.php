<?php
require_once 'models/Linhaobra.php';
require_once 'controllers/Controller.php';

class LinhaObraController extends Controller
{
    public function __construct()
    {
        $roles = ['admin', 'funcionario'];
        $this->authenticationFilterAllows($roles);
    }
    public function index($id_folhaobra)
    {
        $folhaobras = FolhaObra::find($id_folhaobra);
        $linhaobras = LinhaObra::find($id_folhaobra);
        $clienteid = $folhaobras->id_cliente;
        $this->renderView('linhaobra', 'index', ['linhaobras'=>$linhaobras, 'id_folhaobra' => $id_folhaobra, 'clienteid' => $clienteid]);
    }

    public function show($id)
    {
        $linhaobras = LinhaObra::find($id);
        if (is_null($linhaobras)) {
            header('Location: '.constant('INVALID_ACCESS_ROUTE'));
        } else {
            $this->renderView('linhaobra', 'show', ['linhaobra'=>$linhaobras]);
        }
    }

    public function selectservico($id_folhaobra, $id_cliente)
    {
        $referencia = $_POST['referencia'];
        $servicos = Servico::find_by_referencia($referencia);
        $cliente = User::find($id_cliente);

