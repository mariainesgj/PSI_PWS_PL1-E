<html>
<body>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Empresa Create</h1>
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
                        <h3 class="card-title">Empresa</h3>
                    </div>
                    <form action="index.php?c=empresa&a=store" method="POST" class="container">
                        <div class="card-body">
                            <div class="mb-3">
                                <label for="designacaosocial" class="form-label">Designação Social: </label>
                                <input type="text" class="form-control" id="designacaosocail" name="designacaosocial">
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Email: </label>
                                <input type="text" class="form-control" id="email" name="email">
                            </div>
                            <div class="mb-3">
                                <label for="telefone" class="form-label">Telefone:</label>
                                <input type="text" class="form-control" id="telefone" name="telefone">
                            </div>
                            <div class="mb-3">
                                <label for="nif" class="form-label">NIF: </label>
                                <input type="text" class="form-control" id="nif" name="nif">
                            </div>
                            <div class="mb-3">
                                <label for="morada" class="form-label">Morada: </label>
                                <input type="text" class="form-control" id="morada" name="morada">
                            </div>
                            <div class="mb-3">
                                <label for="codpostal" class="form-label">Código-Postal: </label>
                                <input type="text" class="form-control" id="codpostal" name="codpostal">
                            </div>
                            <div class="mb-3">
                                <label for="localidade" class="form-label">Localidade: </label>
                                <input type="text" class="form-control" id="localidade" name="localidade">
                            </div>
                            <div class="mb-3">
                                <label for="capitalsocial" class="form-label">Capital Social:</label>
                                <input type="text" class="form-control" id="capitalsocial" name="capitalsocial">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="float-left">
                                    <a href="index.php?c=empresa&a=index" class="btn btn-secondary">Cancelar</a>
                                </div>
                                <div class="float-right">
                                    <input type="submit" value="Criar Empresa" class="btn btn-success">
                                </div>
                            </div>
                        </div>
                    </form>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
        </div>
    </section>
    <!-- /.content -->
</div>

</body>
</html>