<?php
require_once 'controllers/Controller.php';

class BOController extends Controller
{
    public function index()
    {
        $empresa = Empresa::all();
        $this->renderView('empresa','index',['empresa' => $empresa],'default');
    }

    public function login()
    {

    }

    public function show($id)
    {

    }

    public function create()
    {

    }

    public function store()
    {

    }

    public function edit($id)
    {

    }

    public function update($id)
    {

    }

    public function delete($id)
    {

    }
}
?>
