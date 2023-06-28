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

    public function index()
    {
        $folhaobras = FolhaObra::all();
        $this->renderView('folhaobra', 'index', ['folhaobras'=>$folhaobras]);
    }

    public function show($id)
    {
        $auth = new Auth();
        $adminfo = Folhaobra::find_all_by_estado('emitida, paga');
        $funcfo = Folhaobra::find_all_by_funcionario_id($id);
        if(is_null($adminfo) && is_null($funcfo)) {
            header('Location: '.constant('INVALID_ACCESS_ROUTE'));
        }else if($auth->getUserRole() == 'admin'){
            $this->renderView('folhaobra', 'show', ['folhaobras'=>$adminfo]);
        }
        else if($auth->getUserRole() == 'funcionario'){
            $this->renderView('folhaobra', 'show', ['folhaobras'=>$funcfo]);
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
            $auth = new Auth();
            $nomefuncionario = $auth->getUserName();
            $this->renderView('folhaobra', 'create', ['empresa' => $empresa,'id_folhaobra' => null,'linhaobras'=>$linhaobras,
                'nomefuncionario' => $nomefuncionario]);
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
        $folhaobra->id_funcionario = $auth->getUserId();

        if ($folhaobra->is_valid()) {
            $empresas = Empresa::all();
            $user = User::find($id_cliente);

            if (count($empresas) > 0) {
                $empresa = $empresas[0];
                $folhaobra->save();
                $linhaobras = [];
                $this->renderView('linhaobra', 'index', ['cliente' => $user, 'id_folhaobra' => $folhaobra->id, 'empresa' => $empresa, 'linhaobras' => $linhaobras]);
            } else {
                echo "Não há empresas disponíveis.";
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
        $folhaobra = FolhaObra::find($id);
        $linhaobras = LinhaObra::find_all_by_folha_obras_id($folhaobra->id);
        $ivatotal = 0;
        $valor = 0;
        $folhaobra->update_attributes($this-> getHTTPPost());
        if($folhaobra->is_valid()) {
            foreach ($linhaobras as $linhaobra) {
                $ivatotal += $linhaobra->valoriva * $linhaobra->quantidade;
                $valor += $linhaobra->valor;
                $valortotal = $ivatotal + ($valor * $linhaobra->quantidade);
            }
            $folhaobra->ivatotal = $ivatotal;
            $folhaobra->valortotal = $valortotal;
            $folhaobra->estado = 'emitida';
            $folhaobra->save();
            $this->redirectToRoute('folhaobra', 'show', ['id_funcionario' => $folhaobra->id_funcionario]);
        }else{
            $this->redirectToRoute('folhaobra','edit',['folhaobra'=>$folhaobra]);
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