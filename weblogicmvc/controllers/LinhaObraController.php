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

        if (is_null($servicos)) {
            $servicos_all = Servico::all();
            $this->renderView('linhaobra', 'selectservico', ['servicos'=>$servicos_all, 'id_folhaobra' => $id_folhaobra, 'id_cliente' => $id_cliente, 'cliente' => $cliente]);
        } else {
            $this->redirectToRoute('linhaobra', 'store', ['id_servico' => $servicos->id, 'id_folhaobra' => $id_folhaobra, 'id_cliente' => $id_cliente]);
        }
    }

    public function create()
    {
        $folhaobra = Folhaobra::all();
        $servico = Servico::all();
        $this->renderView('linhaobra', 'create',['servicos'=>$servico,'folhaobras'=>$folhaobra]);
    }

    public function store($id_cliente)
    {
        $linhasobra = new Linhaobra($_POST);
        if($linhasobra->is_valid()){
            $linhasobra->save();
            $this->redirectToRoute('linhaobra','index');
        } else {
            $servico = Servico::all();
            $this->renderView('linhaobra', 'create', ['linhas' => $linhasobra, 'servico'=> $servico]);
        }
    }

    public function edit($id)
    {
        $servico = Servico::all();
        $folhaobra = Folhaobra::all();
        $linhasobra = Linhaobra::find([$id]);
        if (is_null($linhasobra)) {
            header('Location: '.constant('INVALID_ACCESS_ROUTE'));
        } else {
            $this->renderView('linhaobra', 'edit', ['linhas' => $linhasobra,'servico'=> $servico,'folhaobra'=> $folhaobra]);
        }
    }

    public function update($id)
    {
        $linhasobra = Linhaobra::find([$id]);
        $linhasobra->update_attributes($_POST);
        if($linhasobra->is_valid()){
            $linhasobra->save();
            $this->redirectToRoute('linhaobra', 'index');
        } else {
            $this->renderView('linhaobra', 'edit', ['linhas' => $linhasobra]);
        }
    }

    public function delete($id)
    {
        $linhasobra = linhaobra::find($id);
        $linhasobra->delete();
        $this->redirectToRoute('linhaobra','index');
    }
}
