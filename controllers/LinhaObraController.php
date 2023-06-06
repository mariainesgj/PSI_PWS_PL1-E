<?php
require_once 'models/Linhaobra.php';
require_once 'controllers/Controller.php';

class LinhaObraController extends Controller
{
    public function index($id_folhaobra)
    {
        $linhasobras = Linhaobra::All();
        $this->renderView('linhaobra', 'index' , ['linhas' => $linhasobras]);
    }

    public function show($id)
    {
    $linhasobras = Linhaobra::find([$id]);
        if (is_null($linhasobras))
        {
            header('Location: ./router.php' . INVALID_ACCESS_ROUTE);
        }
        else {
            $this->renderView('linhaobra' , 'show' , ['linhas' => $linhasobras] );
        }
    }

    public function selectServico()
    {

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
            //TODO redirect to standard error page
            header('Location: ./router.php?' . INVALID_ACCESS_ROUTE);
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
