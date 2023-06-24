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
    public function index($id)
    {
        $linhasobras = Linhaobra::All([$id]);
        $this->renderView('linhaobra', 'index' , ['linhaobras' => $linhasobras] , 'default');
    }

    public function show($id)
    {
    $linhasobras = Linhaobra::find([$id]);
        if (is_null($linhasobras))
        {
            header('Location: '.constant('INVALID_ACCESS_ROUTE'));
        }
        else {
            $this->renderView('linhaobra' , 'show' , ['linhas' => $linhasobras] );
        }
    }

    public function selectservico()
    {
        $servicos = Servico::all();

        if (is_null($servicos)) {
            header('Location: '.constant('INVALID_ACCESS_ROUTE'));
        } else {
            $this->renderView('linhaobras', 'selectservico', ['servicos'=>$servicos, 'idfolhaobra' => $idfolhaobra, 'idcliente' => $idcliente]);
        }
    }

    public function create()
    {
        $folhaobra = Folhaobra::all();
        $servico = Servico::all();
        $this->renderView('linhaobra', 'create',['servico'=>$servico,'folhaobra'=>$folhaobra]);
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
