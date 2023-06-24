<?php
require_once 'controllers/Controller.php';

class EmpresaController extends Controller
{

    public function __construct()
    {
        $roles = ['admin'];
        $this->authenticationFilterAllows($roles);
    }

    public function index()
    {
        $empresas = Empresa::all();
        $this->renderView('empresa','index',['empresas' => $empresas],'default');
    }

    public function show($id)
    {
        $empresa = Empresa::find($id);
        if(is_null($empresa)) {
            header('Location: '.constant('INVALID_ACCESS_ROUTE'));
        }
        else{
            $this->renderView('empresa', 'show', ['empresa'=>$empresa]);
        }
    }

    public function create()
    {
        $this->renderView('empresa', 'create');
    }

    public function store()
    {
        $empresa = new Empresa ($_POST);
        if($empresa->is_valid()){
            $empresa->save();
            $this->redirectToRoute('empresa','index');
        }else{
            $this->renderView('empresa','create',['empresa'=> $empresa]);
        }
    }

    public function edit($id)
    {
        $empresa = Empresa::find($id);
        if(is_null($empresa)){
            header('Location: '.constant('INVALID_ACCESS_ROUTE'));
        }else{
            $this->renderView('empresa','edit',['empresa'=> $empresa]);
        }
    }

    public function update($id)
    {
        $empresa = Empresa::find($id);
        $empresa->update_attributes($_POST);
        if($empresa->is_valid()){
            $this->redirectToRoute('empresa','index');
        }else{
            $this->renderView('empresa','edit',['empresa' => $empresa]);
        }
    }

    public function delete($id)
    {
        $empresa = Empresa::find($id);
        $empresa->delete();
        $this->redirectToRoute('empresa','index');
    }
}
?>
<?php
