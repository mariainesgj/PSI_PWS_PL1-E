<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>User Create</h1>
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
                    <form action="index.php?c=user&a=store" method="POST" class="container">
                        <div class="card-body">
                            <div class="form-group">
                                <label for="username">Username</label>
                                <input type="text" id="username" name="username" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input type="text" id="password" name="password" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="text" id="email" name="email" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="telefone">Telefone</label>
                                <input type="text" id="telefone" name="telefone" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="nif">Nif</label>
                                <input type="text" id="nif" name="nif" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="morada">Morada</label>
                                <input type="text" id="morada" name="morada" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="codpostal">Cod Postal</label>
                                <input type="text" id="codpostal" name="codpostal" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="localidade">Localidade</label>
                                <input type="text" id="localidade" name="localidade" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="role">Role</label>
                                <select id="role" name="role" class="form-control custom-select">
                                    <option selected disabled>Select one</option>
                                    <option>Admin</option>
                                    <option>Funcionario</option>
                                    <option>Cliente</option>
                                </select>
                            </div>
                        </div>
                        <!-- ... restante do código ... -->
                        <div class="card-footer">
                            <div class="row">
                                <div class="col-12">
                                    <div class="float-left">
                                        <a href="index.php?c=user&a=index" class="btn btn-secondary">Cancelar</a>
                                    </div>
                                    <div class="float-right">
                                        <input type="submit" value="Criar User" class="btn btn-success">
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
