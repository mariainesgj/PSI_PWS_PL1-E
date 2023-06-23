<html>
<body>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>User Create</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="index.php?c=home&a=index">Home</a></li>
                        <li class="breadcrumb-item active">User Create</li>
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
                <form action="index.php?c=user&a=store" method="POST" class="container">
                <div class="card-body">
                    <div class="form-group">
                        <label for="inputName">Username</label>
                        <input type="text" id="username" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="inputName">Password</label>
                        <input type="text" id="password" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="inputName">Email</label>
                        <input type="text" id="email" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="inputName">Telefone</label>
                        <input type="text" id="telefone" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="inputName">Nif</label>
                        <input type="text" id="nif" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="inputName">Morada</label>
                        <input type="text" id="morada" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="inputName">Cod Postal</label>
                        <input type="text" id="codpostal" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="inputName">Localidade</label>
                        <input type="text" id="localidade" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="inputStatus">Role</label>
                        <select id="role" class="form-control custom-select">
                            <option selected disabled>Seleciona um</option>
                            <option>Admin</option>
                            <option>Funcionario</option>
                            <option>Cliente</option>
                        </select>
                    </div>
                </div>
                </form>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
            <div class="row">
                <div class="col-12">
                    <div class="float-left">
                        <a href="index.php?c=user&a=index" class="btn btn-secondary">Cancel</a>
                    </div>
                    <div class="float-right">
                        <input type="submit" value="Create new User" class="btn btn-success">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- /.content -->
</div>

</body>
</html>