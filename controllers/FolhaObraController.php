<?php
require_once 'models/Folhaobra.php';
require_once 'controllers/Controller.php';

class FolhaObraController extends Controller
{
    public function index()
    {
        $folhaobras = Folhaobra::all();
        $this->renderView('folhaobra','index',['folhaobras' => $folhaobras]);
    }

    public function show($id)
    {
        $folhaobra = Folhaobra::find($id);
        if(is_null($folhaobra)) {
            //header('Location: ./router.php?' . INVALID_ACCESS_ROUTE);
        }
        else{
            $this->renderView('folhaobra', 'show', ['folhaobra'=>$folhaobra]);
        }
    }

    public function selectCliente()
    {

    }

    public function create()
    {
        $this->renderView('folhaobra', 'create');
    }

    public function store($id_cliente)
    {
        $folhaobra = new Folhaobra ($_POST);
        if($folhaobra->is_valid($id_cliente)){
            $folhaobra->save($id_cliente);
            $this->redirectToRoute('folhaobra','index');
        }else{
            $this->renderView('folhaobra','create',['folhaobra'=> $folhaobra]);
        }
    }

    public function edit($id)
    {
        $folhaobra = Folhaobra::find($id);
        if(is_null($folhaobra)){
            //To do redirect error
        }else{
            $this->renderView('folhaobra','edit',['folhaobra'=> $folhaobra]);
        }
    }

    public function update($id)
    {
        $folhaobra = User::find($id);
        $folhaobra->update_attributes($_POST);
        if($folhaobra->is_valid()){
            $this->redirectToRoute('folhaobra','index');
        }else{
            $this->renderView('folhaobra','edit',['folhaobra' => $folhaobra]);
        }
    }

    public function delete($id)
    {
        $folhaobra = folhaobra::find($id);
        $folhaobra->delete();
        $this->redirectToRoute('folhaobra','index');
    }
}