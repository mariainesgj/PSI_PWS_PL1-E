<?php
require_once 'controllers/Controller.php';

class IvaController extends Controller
{
    public function __construct()
    {
        $roles = ['admin', 'funcionario'];
        $this->authenticationFilterAllows($roles);
    }
    public function index()
    {
        $ivas = Iva::all();
        $this->renderView('iva','index',['ivas' => $ivas],'default');
    }

    public function show($id)
    {
        $ivas = Iva::find($id);
        if(is_null($ivas)) {
            header('Location: '.constant('INVALID_ACCESS_ROUTE'));
        }
        else{
            $this->renderView('iva', 'show', ['iva' => $ivas]);
        }
    }

    public function create()
    {
        $this->renderView('iva', 'create');
    }

    public function store()
    {
        $ivas = new Iva ($_POST);
        if($ivas->is_valid()){
            $ivas->save();
            $this->redirectToRoute('iva','index');
        }else{
            $this->renderView('iva','create',['iva'=> $ivas]);
        }
    }

    public function edit($id)
    {
        $ivas = Iva::find($id);
        if(is_null($ivas)){
            header('Location: '.constant('INVALID_ACCESS_ROUTE'));
        }else{
            $this->renderView('iva','edit',['iva'=> $ivas]);
        }
    }

    public function update($id)
    {
        $ivas = Iva::find($id);
        $ivas->update_attributes($_POST);
        if($ivas->is_valid()){
            $this->redirectToRoute('iva','index');
        }else{
            $this->renderView('iva','edit',['iva' => $ivas]);
        }
    }

    public function delete($id)
    {
        $ivas = Iva::find($id);
        $ivas->delete();
        $this->redirectToRoute('iva','index');
    }
}
?>

