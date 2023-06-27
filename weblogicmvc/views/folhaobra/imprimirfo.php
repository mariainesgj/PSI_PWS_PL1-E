<div class="wrapper">
    <!-- Main content -->
    <section class="invoice">
        <!-- title row -->
        <div class="row">
            <div class="col-12">
                <h2 class="page-header">
                    <i class="fas fa-globe"></i> FolhaObra
                    <small class="float-right"><?= date('d-m-Y') ?></small>
                </h2>
            </div>
            <!-- /.col -->
        </div>
        <!-- info row -->
        <div class="row invoice-info">
            <div class="col-sm-4 invoice-col">
                From
                <address>
                    <tr>
                        <strong><td><?=$empresa->designacaosocial?></td></strong><br>
                        <td><?=$empresa->morada?></td>
                        <td><?=$empresa->codpostal?></td>
                        <td><?=$empresa->localidade?></td><br>
                        Telefone: <td><?=$empresa->telefone?></td><br>
                        Email: <td><?=$empresa->email?></td>
                    </tr>
                </address>
            </div>
            <!-- /.col -->
            <div class="col-sm-4 invoice-col">
                To
                <address>
                    <strong><?=$cliente->username?></strong><br>
                    <td><?=$cliente->morada?></td>
                    <td><?=$cliente->codpostal?></td>
                    <td><?=$cliente->localidade?></td><br>
                    Telefone: <td><?=$cliente->telefone?></td><br>
                    Email: <td><?=$cliente->email?></td>
                </address>
            </div>
            <!-- /.col -->
            <div class="col-sm-4 invoice-col">
                <b>Invoice #007612</b><br>
                <br>
                <b>Folha Obra ID: </b><?=$id_folhaobra?><br>
                <b>Data Pagamento: </b><?= date('d-m-Y') ?><br>
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->

        <!-- Table row -->
        <div class="row">
            <div class="col-12 table-responsive">
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th>Referência</th>
                        <th>Descrição</th>
                        <th>Quantidade</th>
                        <th>Preço/Hora</th>
                        <th>Valor Iva</th>
                        <th>Valor Unitário</th>
                        <th>Subtotal</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($linhaobras as $linhaobra) { ?>
                        <tr>
                            <td><?=$servico->referencia?></td>
                            <td><?=$servico->descricao?></td>
                            <td><?=$linhaobra->quantidade?></td>
                            <td><?=$servico->precohora?></td>
                            <td><?=$linhaobra->valoriva?></td>
                            <td><?=$linhaobra->valorunitario?></td>
                            <td><?=$subtotal?></td>
                            <td>
                                <form action="selectservico.php?c=linhaobra&a=selectservico" method="POST">
                                    <div class="form-group">
                                        <label for="referencia" class="form-label">Referência:</label>
                                        <input type="text" class="form-control" id="referencia" name="referencia">
                                    </div></td>
                            <td><button type="submit" class="btn btn-primary">Selecionar</button>
                                </form>
                            </td>
                        </tr>
                    <?php } ?>
                    </tbody>
                </table>
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->

        <div class="row">
            <!-- accepted payments column -->
            <div class="col-6">
                <p class="lead">Payment Methods:</p>
                <img src="./public/dist/img/credit/visa.png" alt="Visa">
                <img src="./public/dist/img/credit/mastercard.png" alt="Mastercard">
                <img src="./public/dist/img/credit/american-express.png" alt="American Express">
                <img src="./public/dist/img/credit/paypal2.png" alt="Paypal">
            </div>
            <!-- /.col -->
            <div class="col-6">
                <div class="table-responsive">
                    <table class="table">
                        <tr>
                            <th>Valor Total:</th>
                            <td>0€</td>
                        </tr>
                        <tr>
                            <th>Iva Total:</th>
                            <td>0€</td>
                        </tr>
                        <tr>
                            <th>Total FO:</th>
                            <td>0€</td>
                        </tr>
                    </table>
                </div>
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </section>
    <!-- /.content -->
</div>
<!-- ./wrapper -->
<!-- Page specific script -->
<script>
    window.addEventListener("load", window.print());
</script>
