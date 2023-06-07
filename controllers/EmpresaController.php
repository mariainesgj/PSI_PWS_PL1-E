<?php
require_once 'controllers/Controller.php';

class EmpresaController extends Controller
{
    public function index()
    {
        $empresa = Empresa::all();
        $this->renderView('empresa','index',['empresa' => $empresa],'default');
    }

    public function show($id)
    {
        $empresa = Empresa::find($id);
        if(is_null($empresa)) {
            //header('Location: ./router.php?' . INVALID_ACCESS_ROUTE);
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
            //To do redirect error
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
