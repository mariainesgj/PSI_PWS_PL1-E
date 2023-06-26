<?php
require_once 'models/Folhaobra.php';
require_once 'models/Empresa.php';
require_once 'models/User.php';
require_once 'models/Linhaobra.php';
require_once 'controllers/Controller.php';

class FolhaObraController extends Controller
{
    public function __construct()
    {
        $roles = ['admin', 'funcionario','cliente'];
        $this->authenticationFilterAllows($roles);
    }
    /*public function index()
    {
        $folhasobras = FolhaObra::all();
        //mostrar a vista index passando os dados por parâmetro
        $this->renderView('folhaobra', 'index', ['folhasobras'=>$folhasobras]);
    }*/

    public function show($id)
    {
        $folhaobra = Folhaobra::find($id);
        if(is_null($folhaobra)) {
            header('Location: '.constant('INVALID_ACCESS_ROUTE'));
        }
        else{
            $this->renderView('folhaobra', 'show', ['folhaobra'=>$folhaobra]);
        }
    }

    public function selectcliente()
    {
        $users = User::find_all_by_role('cliente');
        if (is_null($users)) {
            header('Location: '.constant('INVALID_ACCESS_ROUTE'));
        } else {
            $this->renderView('folhaobra', 'selectcliente', ['users'=>$users]);
        }
    }

    public function create()
    {
        $empresas = Empresa::all();
        if(count($empresas) > 0) {
            $empresa = $empresas[0];
            $linhaobras = Linhaobra::all();
            $this->renderView('folhaobra', 'create', ['empresa' => $empresa,'linhaobras'=>$linhaobras]);
        }
    }

    public function store($id_cliente)
    {
        $auth = new Auth();
        $folhaobra = new FolhaObra();
        $folhaobra->data = date('d-m-Y');
        $folhaobra->valortotal = 0;
        $folhaobra->ivatotal = 0;
        $folhaobra->estado = 'em lancamento';
        $folhaobra->id_cliente = $id_cliente;
        $folhaobra->user_id = $auth->getUserId();

        if($folhaobra->is_valid())
        {
            $empresas = Empresa::all();
            $user = User::find($id_cliente);

            if(count($empresas) > 0) {
                $empresa = $empresas[0];
                $folhaobra->save();
                $this->renderView('linhaobra', 'create', ['cliente' => $user, 'id_folhaobra' => $folhaobra->id, 'empresa' => $empresa]);
            }
        } else {
            $this->redirectToRoute('folhaobra', 'create');
        }
    }

    public function edit($id)
    {
        $folhaobra = Folhaobra::find($id);
        if(is_null($folhaobra)){
            header('Location: '.constant('INVALID_ACCESS_ROUTE'));
        }else{
            $this->renderView('folhaobra','edit',['folhaobra'=> $folhaobra]);
        }
    }

    public function update($id)
    {
        $folhaobra = Folhaobra::find($id);
        $folhaobra->update_attributes($_POST);
        if($folhaobra->is_valid()){
            $this->redirectToRoute('folhaobra','index');
        }else{
            $this->renderView('folhaobra','edit',['folhaobra' => $folhaobra]);
        }
    }

    public function delete($id)
    {
        $folhaobra = Folhaobra::find($id);
        $folhaobra->delete();
        $this->redirectToRoute('folhaobra','index');
    }
}
?>