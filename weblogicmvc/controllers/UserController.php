<?php
require_once 'models/User.php';
require_once 'controllers/Controller.php';

class UserController extends Controller
{
    public function __construct()
    {
        $roles = ['admin', 'funcionario'];
        $this->authenticationFilterAllows($roles);
    }
    public function index()
    {
        $users = User::all();
        $this->renderView('user','index',['users' => $users]);
    }

    public function show($id)
    {
        $user = User::find($id);
        if(is_null($user)) {
            header('Location: '.constant('INVALID_ACCESS_ROUTE'));
        }
        else{
            $this->renderView('user', 'show', ['user'=>$user]);
        }
    }

    public function create()
    {
        $this->renderView('user', 'create');
    }

    public function store()
    {
        $user = new User ($this-> getHTTPPost());
        if($user->is_valid()){
            $user->save();
            $this->redirectToRoute('user','index');
        }else{
            $this->renderView('user','create',['user'=> $user]);
        }
    }

    public function edit($id)
    {
        $user = User::find($id);
        if(is_null($user)){
            header('Location: '.constant('INVALID_ACCESS_ROUTE'));
        }else{
            $this->renderView('user','edit',['user'=> $user]);
        }
    }

    public function update($id)
    {
        $user = User::find($id);
        $user->update_attributes($_POST);
        if($user->is_valid()){
            $this->redirectToRoute('user','index');
        }else{
            $this->renderView('user','edit',['user' => $user]);
        }
    }

    public function delete($id)
    {
        $user = User::find($id);
        $user->delete();
        $this->redirectToRoute('user','index');
    }
}

