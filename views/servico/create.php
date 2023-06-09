<html>
<body>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Serviço Create</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="index.php?c=home&a=index">Home</a></li>
                        <li class="breadcrumb-item active">Serviço Create</li>
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
                        <h3 class="card-title">Serviço</h3>

                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                                <i class="fas fa-minus"></i>
                            </button>
                        </div>
                    </div>
                    <form action="index.php?c=servico&a=store" method="POST" class="container">
                        <div class="card-body">
                            <div class="form-group">
                                <label for="inputName">Referência</label>
                                <input type="text" id="referencia" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="inputDescription">Descrição</label>
                                <textarea id="descricao" class="form-control" rows="4"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="inputName">Preço/Hora</label>
                                <input type="text" id="precohora" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="inputName">Id Iva</label>
                                <input type="text" id="id_iva" class="form-control">
                            </div>
                        </div>
                    </form>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
                <div class="row">
                    <div class="col-12">
                        <div class="float-left">
                            <a href="index.php?c=servico&a=index" class="btn btn-secondary">Cancel</a>
                        </div>
                        <div class="float-right">
                            <input type="submit" value="Create new Serviço" class="btn btn-success">
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
