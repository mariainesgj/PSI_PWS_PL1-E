<html>
<body>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Serviço Create</h1>
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
                        <h3 class="card-title">Serviço</h3>
                    </div>
                    <form action="index.php?c=servico&a=store" method="POST" class="container">
                        <div class="card-body">
                            <div class="mb-3">
                                <label for="referencia" class="form-label">Referência:</label>
                                <input type="text" class="form-control" id="referencia" name="referencia">
                            </div>
                            <div class="mb-3">
                                <label for="descricao" class="form-label">Descrição:</label>
                                <input type="text" class="form-control" id="descricao" name="descricao">
                            </div>
                            <div class="mb-3">
                                <label for="precohora" class="form-label">Preço/Hora:</label>
                                <input type="text" class="form-control" id="precohora" name="precohora">
                            </div>
                            <div class="mb-3">
                                <label for="id_iva" class="form-label">Id Iva:</label>
                                <input type="text" class="form-control" id="id_iva" name="id_iva">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="float-left">
                                    <a href="index.php?c=servico&a=index" class="btn btn-secondary">Cancelar</a>
                                </div>
                                <div class="float-right">
                                    <input type="submit" value="Criar Serviço" class="btn btn-success">
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



