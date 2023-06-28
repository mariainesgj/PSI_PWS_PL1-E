<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Folha Obra Show</h1>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <!-- Default box -->
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Folha Obra</h3>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-12 col-md-12 col-lg-8 order-2 order-md-1">
                        <div class="row">
                            <div class="col-12 col-sm-4">
                                <div class="info-box bg-light">
                                    <div class="info-box-content">
                                        <span class="info-box-text text-center text-muted">Data</span>
                                        <span class="info-box-number text-center text-muted mb-0"><?=date('d-m-Y', strtotime($folhaobra->data))?></span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-sm-4">
                                <div class="info-box bg-light">
                                    <div class="info-box-content">
                                        <span class="info-box-text text-center text-muted">Valor Total</span>
                                        <span class="info-box-number text-center text-muted mb-0"><?=$folhaobra->valortotal?></span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-sm-4">
                                <div class="info-box bg-light">
                                    <div class="info-box-content">
                                        <span class="info-box-text text-center text-muted">Iva Total</span>
                                        <span class="info-box-number text-center text-muted mb-0"><?=$folhaobra->ivatotal?></span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-sm-4">
                                <div class="info-box bg-light">
                                    <div class="info-box-content">
                                        <span class="info-box-text text-center text-muted">Estado</span>
                                        <span class="info-box-number text-center text-muted mb-0"><?=$folhaobra->estado?></span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-sm-4">
                                <div class="info-box bg-light">
                                    <div class="info-box-content">
                                        <span class="info-box-text text-center text-muted">Id Cliente</span>
                                        <span class="info-box-number text-center text-muted mb-0"><?=$folhaobra->id_cliente?></span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-sm-4">
                                <div class="info-box bg-light">
                                    <div class="info-box-content">
                                        <span class="info-box-text text-center text-muted">Id Funcionario</span>
                                        <span class="info-box-number text-center text-muted mb-0"><?=$folhaobra->id_funcionario?></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
    </section>
    <!-- /.content -->
    <div class="row">
        <div class="col-12 text-left">
            <a href="index.php?c=folhaobra&a=index" class="btn btn-secondary">Voltar</a>
        </div>
    </div>
</div>
<!-- /.content-wrapper -->