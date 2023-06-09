<?php
require_once 'controllers/Controller.php';

class ServicoController extends Controller
{
    public function index()
    {
        $servicos = Servico::all();
        $this->renderView('servico','index',['servicos' => $servicos],'default');
    }

    public function show($id)
    {
        $servicos = Servico::find($id);
        if(is_null($servicos)) {
            header('Location: '.constant('INVALID_ACCESS_ROUTE'));
        }
        else{
            $this->renderView('servico', 'show', ['servico'=>$servicos]);
        }
    }

    public function create()
    {
        $this->renderView('servico', 'create');
    }

    public function store()
    {
        $servicos = new Servico($_POST);
        if($servicos->is_valid()){
            $servicos->save();
            $this->redirectToRoute('servico','index');
        }else{
            $this->renderView('servico','create',['servico'=> $servicos]);
        }
    }

    public function edit($id)
    {
        $servicos = Servico::find($id);
        if(is_null($servicos)){
            header('Location: '.constant('INVALID_ACCESS_ROUTE'));
        }else{
            $this->renderView('servico','edit',['servico'=> $servicos]);
        }
    }

    public function update($id)
    {
        $servicos = Servico::find($id);
        $servicos->update_attributes($_POST);
        if($servicos->is_valid()){
            $this->redirectToRoute('servico','index');
        }else{
            $this->renderView('servico','edit',['servico' => $servicos]);
        }
    }

    public function delete($id)
    {
        $servicos = Servico::find($id);
        $servicos->delete();
        $this->redirectToRoute('servico','index');
    }
}
?>

