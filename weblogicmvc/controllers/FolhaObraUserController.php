<?php
require_once 'models/Folhaobra.php';
require_once 'models/Empresa.php';
require_once 'models/User.php';
require_once 'models/Linhaobra.php';
require_once 'controllers/Controller.php';

class FolhaObraUserController extends Controller
{
    public function __construct()
    {
        $roles = ['cliente'];
        $this->authenticationFilterAllows($roles);
    }

    public function showcliente($id)
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

    public function pagamentofo($id_cliente)
    {
        $folhaobra = FolhaObra::find($id_cliente);
        $folhaobra->update_attributes($this-> getHTTPPost());
        $folhaobra->estado = 'paga';
        if($folhaobra->is_valid()){
            $folhaobra->save();
            $this->redirectToRoute('folhaobra', 'showcliente', ['id_cliente'=> $folhaobra->id_cliente]);
        } else {
            $this->renderView('folhaobra', 'showcliente', ['folhaobra'=>$folhaobra]);
        }
    }

    public function imprimirfo($id, $id_cliente)
    {
        $folhaobra = FolhaObra::find($id);
        $cliente = User::find($id_cliente);

        if (is_null($folhaobra)) {
            header('Location: '.constant('INVALID_ACCESS_ROUTE'));
        } else {
            $this->renderView('folhaobra', 'imprimirfo', ['folhaobras'=>[$folhaobra], 'idfolhaobra' => $id, 'cliente' => $cliente], 'FO');
        }
    }
}
?>
