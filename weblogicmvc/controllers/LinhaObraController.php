<?php
require_once 'models/Linhaobra.php';
require_once 'models/Servico.php';
require_once 'models/Folhaobra.php';
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
        $auth = new Auth();
        $nomefuncionario = $auth->getUserName();
        $folhaobras = FolhaObra::all();
        $id_folhaobra = $folhaobras->id;
        $linhaobras = LinhaObra::find($id_folhaobra);
        $id_cliente = $folhaobras->id_cliente;
        $this->renderView('linhaobra', 'index', ['linhaobras'=>$linhaobras, 'id_folhaobra' => $id_folhaobra, 'id_cliente' => $id_cliente,
            'nomefuncionario' => $nomefuncionario]);
    }

    public function selectservico($id)
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $referencia = $_POST['referencia'];
            $servicos = Servico::find_by_referencia($referencia);
            $folhaobra = FolhaObra::find($id);

            if (is_null($servicos)) {
                $servicos_all = Servico::all();
                $this->renderView('linhaobra', 'selectservico', ['servicos' => $servicos_all, 'id_folhaobra' => $folhaobra]);
            } else {
                $this->redirectToRoute('linhaobra', 'create', ['id_servico' => $servicos->id, 'id_folhaobra' => $folhaobra]);
            }
        } else {
            header('Location: '.constant('INVALID_ACCESS_ROUTE'));
        }
    }

    public function create($id_folhaobra,$id_cliente)
    {
        $folhaobra = new FolhaObra();

        if ($folhaobra->estado != "emitida"){
            $linhaobras = LinhaObra::find_all_by_id_folhaobra($id_folhaobra);

            if ($id_cliente != 0) {
                $cliente = User::find_by_id($id_cliente);

                $folhaobras = FolhaObra::all();
                $this->renderView('linhaobras', 'create', ['folhaobras' => $folhaobras, 'linhaobras' => $linhaobras, 'cliente' => $cliente]);
            }
        }else{
            $this->redirectToRoute('linhaobras', 'index');
        }
    }

    public function store($id_folhaobra,$id_servico,$id_cliente)
    {
        $linhaobra = new LinhaObra();
        $servico = Servico::find($id_servico);
        $linhaobra = LinhaObra::find_all_by_id_folhaobra($id_folhaobra);

        $linhaobra->quantidade = 0;
        $linhaobra->valor = $servico->precohora;
        $linhaobra->valoriva =  $servico->precohora * ($servico->iva->percentagem / 100);
        $linhaobra->valortotal = $servico->precohora + ($servico->precohora * ($servico->iva->percentagem / 100));
        $linhaobra->subtotal = $linhaobra->valor * $linhaobra->quantidade;

        $folhaobra = FolhaObra::find($id_folhaobra);

        $linhaobra->folha_obras_id = $folhaobra->id;
        $linhaobra->servico_id = $id_servico;

        $user = User::find($id_cliente);

        if($linhaobra->is_valid())
        {
            $empresas = Empresa::all();
            if(count($empresas) > 0) {
                $empresa = $empresas[0];
                $linhaobra->save();
                $this->renderView('linhaobra', 'create', ['empresa'=>$empresa, 'id_cliente' => $id_cliente, 'id_folhaobra'=>$id_folhaobra, 'cliente'=>$user]);
            }
        } else {
            $this->redirectToRoute('folhaobra', 'create');
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
        $linhaobra = LinhaObra::find($id);
        $linhaobra->update_attributes($this->getHTTPPost());

        if($linhaobra->is_valid()){

            $id_folhaobras = $linhaobra->id_folhaobra;
            $folhaobra = FolhaObra::find_by_id($id_folhaobras);
            $id_servicos = $linhaobra->id_servico;
            $id_clientes = $folhaobra->id_cliente;
            $cliente = User::find($id_clientes);
            $linhaobra->quantidade = $_POST['quantidade'];
            $linhaobra->subtotal = $linhaobra->valortotal * $linhaobra->quantidade;
            $linhaobra->save();

            $this->renderView('linhaobra', 'create', ['idfolhaobra'=> $id_folhaobras, 'cliente'=> $cliente]);
        } else {
            $this->redirectToRoute('linhaobra', 'store', ['id_folhaobra'=> $id_folhaobras,'id_servico'=> $id_servicos ,'id_cliente'=> $cliente]);
        }
    }

    public function delete($id)
    {
        $linhaobra = LinhaObra::find($id);

        $id_folhaobras = $linhaobra->id_folhaobra;
        $folhaobra = FolhaObra::find($id_folhaobras);
        $id_clientes = $folhaobra->id_cliente;
        $cliente = User::find($id_clientes);

        $linhaobra->delete();

        $this->renderView('linhaobra', 'create', ['id_folhaobra'=> $id_folhaobras, 'id_cliente'=> $cliente]);
    }
}?>
