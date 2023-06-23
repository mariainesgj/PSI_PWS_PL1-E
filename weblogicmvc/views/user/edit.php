<html>
<body>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>User Show</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="index.php?c=home&a=index">Home</a></li>
                        <li class="breadcrumb-item active">User Show</li>
                    </ol>
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

                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                                <i class="fas fa-minus"></i>
                            </button>
                        </div>
                    </div>
                    <div class="card-body">
                        <form action="index.php?c=user&a=update&id=<?=$user->id ?>" method="POST" class="container">
                        <div class="form-group">
                            <label for="inputName">Username</label>
                            <input type="text" id="username" class="form-control" value="<?=$user->username?>">
                        </div>
                        <div class="form-group">
                            <label for="inputName">Password</label>
                            <input type="text" id="password" class="form-control" value="<?=$user->password?>">
                        </div>
                        <div class="form-group">
                            <label for="inputName">Email</label>
                            <input type="text" id="email" class="form-control" value="<?=$user->email?>">
                        </div>
                        <div class="form-group">
                            <label for="inputName">Telefone</label>
                            <input type="text" id="telefone" class="form-control" value="<?=$user->telefone?>">
                        </div>
                        <div class="form-group">
                            <label for="inputName">Nif</label>
                            <input type="text" id="nif" class="form-control" value="<?=$user->nif?>">
                        </div>
                        <div class="form-group">
                            <label for="inputName">Morada</label>
                            <input type="text" id="morada" class="form-control" value="<?=$user->morada?>">
                        </div>
                        <div class="form-group">
                            <label for="inputName">Cod Postal</label>
                            <input type="text" id="codpostal" class="form-control" value="<?=$user->codpostal?>">
                        </div>
                        <div class="form-group">
                            <label for="inputName">Localidade</label>
                            <input type="text" id="localidade" class="form-control" value="<?=$user->localidade?>">
                        </div>
                        <div class="form-group">
                            <label for="inputStatus">Role</label>
                            <select id="role" class="form-control custom-select" value="<?=$user->role?>">
                                <option selected disabled>Seleciona um</option>
                                <option>Admin</option>
                                <option>Funcionario</option>
                                <option>Cliente</option>
                            </select>
                        </div>
                        </form>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
                <div class="row">
                    <div class="col-12">
                        <a href="index.php?c=user&a=index" class="btn btn-secondary">Cancel</a>
                        <input type="submit" value="Save Changes" class="btn btn-success float-right">
                    </div>
                </div>
            </div>
        </div>

    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
</body>
</html>