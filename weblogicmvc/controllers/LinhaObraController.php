<?php
require_once 'models/Linhaobra.php';
require_once 'models/Servico.php';
require_once 'models/Folhaobra.php';
require_once 'controllers/Controller.php';

class LinhaObraController extends Controller
{
    public function __construct()
    {
        $roles = ['admin', 'funcionario','cliente'];
        $this->authenticationFilterAllows($roles);
    }

    public function selectservico($id_folhaobra)
    {
        $servicos = Servico::all();
        $folhaobra = FolhaObra::find($id_folhaobra);
        $id_cliente = $folhaobra->id_cliente;

        $this->renderView('linhaobra', 'selectservico', ['servicos' => $servicos, 'id_folhaobra' => $id_folhaobra, 'id_cliente' => $id_cliente]);
    }

    public function create($id_folhaobra, $id_cliente)
    {
        $folhaobra = FolhaObra::find($id_folhaobra);

        if ($folhaobra->estado != "emitida") {
            $linhaobras = LinhaObra::find_all_by_id_folhaobra($id_folhaobra);

            if ($id_cliente != 0) {
                $cliente = User::find_by_id($id_cliente);

                $folhaobras = FolhaObra::all();
                $this->renderView('linhaobras', 'create', ['folhaobras' => $folhaobras, 'linhaobras' => $linhaobras, 'cliente' => $cliente]);
            }
        } else {
            $this->redirectToRoute('linhaobras', 'index');
        }
    }

    public function store($id_folhaobra, $id_servico, $id_cliente)
    {
        $linhaobra = new LinhaObra();
        //atribuir valores ao post
        $linhaobra->quantidade = $_POST['quantidade'];
        $linhaobra->valorunitario = $_POST['valorunitario'];

        $servico = Servico::find($id_servico);

        $linhaobra = new LinhaObra();
        $linhaobra->valorunitario = $servico->precohora;
        $iva = Iva::find($servico->id_iva);
        $percentagem = $iva->percentagem;
        $linhaobra->valoriva = $servico->precohora * ($percentagem / 100);
        $linhaobra->valortotal = $servico->precohora + ($servico->precohora * ($percentagem / 100));
        $linhaobra->subtotal = $linhaobra->valorunitario * $linhaobra->quantidade;

        $folhaobra = FolhaObra::find($id_folhaobra);

        $linhaobra->id_folhaobra = $folhaobra->id;
        $linhaobra->id_servico = $id_servico;

        $cliente = User::find($id_cliente);

        if ($linhaobra->is_valid()) {
            $empresas = Empresa::all();
            if (count($empresas) > 0) {
                $empresa = $empresas[0];
                $linhaobra->save();
                $this->renderView('linhaobra', 'create', ['empresa' => $empresa, 'id_folhaobra' => $folhaobra, 'id_cliente' =>$cliente, 'id_servico' => $id_servico]);
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
