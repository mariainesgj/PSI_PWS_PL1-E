<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>User Edit</h1>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-md-6">
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">User</h3>
                    </div>
                    <form action="index.php?c=user&a=update&id=<?=$user->id?>" method="POST" class="container">
                        <div class="card-body">
                            <div class="form-group">
                                <label for="username">Username</label>
                                <input type="text" id="username" name="username" class="form-control" value="<?=$user->username?>">
                            </div>
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input type="text" id="password" class="form-control" value="<?=$user->password?>">
                            </div>
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="text" id="email" class="form-control" value="<?=$user->email?>">
                            </div>
                            <div class="form-group">
                                <label for="telefone">Telefone</label>
                                <input type="text" id="telefone" class="form-control" value="<?=$user->telefone?>">
                            </div>
                            <div class="form-group">
                                <label for="nif">Nif</label>
                                <input type="text" id="nif" class="form-control" value="<?=$user->nif?>">
                            </div>
                            <div class="form-group">
                                <label for="morada">Morada</label>
                                <input type="text" id="morada" class="form-control" value="<?=$user->morada?>">
                            </div>
                            <div class="form-group">
                                <label for="codpostal">Cod Postal</label>
                                <input type="text" id="codpostal" class="form-control" value="<?=$user->codpostal?>">
                            </div>
                            <div class="form-group">
                                <label for="localidade">Localidade</label>
                                <input type="text" id="localidade" class="form-control" value="<?=$user->localidade?>">
                            </div>
                            <div class="form-group">
                                <label for="role">Role</label>
                                <select id="role" name="role" class="form-control custom">
                                    <option value="Admin" <?=($user->role == 'Admin') ? 'selected' : ''?>>Admin</option>
                                    <option value="Funcionario" <?=($user->role == 'Funcionario') ? 'selected' : ''?>>Funcionario</option>
                                    <option value="Cliente" <?=($user->role == 'Cliente') ? 'selected' : ''?>>Cliente</option>
                                </select>
                            </div>
                        </div>
                        <div class="card-footer">
                            <div class="row">
                                <div class="col-12">
                                    <div class="float-left">
                                        <a href="index.php?c=user&a=index" class="btn btn-secondary">Cancelar</a>
                                    </div>
                                    <div class="float-right">
                                        <input type="submit" value="Salvar as alterações" class="btn btn-success float-right">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                    <!-- /.card-footer -->
                </div>
                <!-- /.card -->
            </div>
        </div>
    </section>
    <!-- /.content -->
</div>
