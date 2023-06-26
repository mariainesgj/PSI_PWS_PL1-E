<html>
<body>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Serviço Show</h1>
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
                    <form action="index.php?c=servico&a=update&id=<?=$servico->id?>" method="POST" class="container">
                    <div class="card-body">
                            <div class="form-group">
                                <label for="inputName">Referência</label>
                                <input type="text" id="referencia" class="form-control" value="<?=$servico->referencia?>">
                            </div>
                            <div class="form-group">
                                <label for="inputDescription">Descrição</label>
                                <textarea id="descricao" class="form-control" rows="4" value="<?=$servico->descricao?>"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="inputName">Preço/Hora</label>
                                <input type="text" id="precohora" class="form-control" value="<?=$servico->precohora?>">
                            </div>
                            <div class="form-group">
                                <label for="inputName">Id Iva</label>
                                <input type="text" id="id_iva" class="form-control" value="<?=$servico->id_iva?>">
                            </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="float-left">
                                    <a href="index.php?c=servico&a=index" class="btn btn-secondary">Cancelar</a>
                                </div>
                                <div class="float-right">
                                    <input type="submit" value="Salvar as alterações" class="btn btn-success">
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
<!-- /.content-wrapper -->
</body>
</html>