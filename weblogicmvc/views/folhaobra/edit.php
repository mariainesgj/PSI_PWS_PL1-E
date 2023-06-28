<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Folha Obra Edit</h1>
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
                        <h3 class="card-title">Folha Obra</h3>
                    </div>
                    <form action="index.php?c=folhaobra&a=update&id=<?=$folhaobra->id?>" method="POST" class="container">
                        <div class="card-body">
                            <div class="mb-3">
                                <label for="data">Data</label>
                                <input type="text" class="form-control" id="data" name="data" value="<?=date('d-m-Y', strtotime($folhaobra->data))?>">
                            </div>
                            <div class="mb-3">
                                <label for="valortotal">Valor Total</label>
                                <input type="text" class="form-control" id="valortotal" name="valortotal" value="<?=$folhaobra->valortotal?>">
                            </div>
                            <div class="mb-3">
                                <label for="ivatotal">Iva Total</label>
                                <input type="text" class="form-control" id="ivatotal" name="ivatotal" value="<?=$folhaobra->ivatotal?>">
                            </div>
                            <div class="mb-3">
                                <label for="estado" class="form-label">Estado</label>
                                <select id="estado" name="estado" class="form-control">
                                    <option value="em lancamento" <?=($folhaobra->estado == 'em lancamento') ? 'selected' : ''?>>em lancamento</option>
                                    <option value="emitida" <?=($folhaobra->estado == 'emitida') ? 'selected' : ''?>>emitida</option>
                                    <option value="paga" <?=($folhaobra->estado == 'emitida') ? 'selected' : ''?>>paga</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="id_cliente">Id Cliente</label>
                                <input type="text" class="form-control" id="id_cliente" name="id_cliente" value="<?=$folhaobra->id_cliente?>">
                            </div>
                            <div class="mb-3">
                                <label for="id_funcionario">Id Funcionario</label>
                                <input type="text" class="form-control" id="id_funcionario" name="id_funcionario" value="<?=$folhaobra->id_funcionario?>">
                            </div>
                        </div>
                        <div class="card-footer">
                            <div class="row">
                                <div class="col-12">
                                    <div class="float-left">
                                        <a href="index.php?c=folhaobra&a=index" class="btn btn-secondary">Cancelar</a>
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