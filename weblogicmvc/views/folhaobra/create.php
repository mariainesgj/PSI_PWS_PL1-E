<html>
<body>

<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Folha Obra</h1>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>

<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <!-- Main content -->
                <div class="invoice p-3 mb-3">
                    <!-- title row -->
                    <div class="row">
                        <div class="col-12">
                            <h4>
                                <i class="fas fa-globe"></i> FolhaObra
                                    <small class="float-right"><?= date('d-m-Y') ?></small>
                            </h4>
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
                                <strong>Cliente</strong>
                                <a href="index.php?c=folhaobra&a=selectcliente" class="btn btn-info" role="button">Selecionar Cliente</a>
                            </address>
                        </div>
                        <!-- /.col -->
                        <div class="col-sm-4 invoice-col">
                            <b>Invoice #007612</b><br>
                            <br>
<<<<<<< HEAD
                                <b>Folha Obra ID: </b><?=$id_folhaobra?><br>
                                <b>Data Pagamento: </b><?= date('d-m-Y') ?><br>
=======
                            <?php foreach ($folhaobras as $folhaobra) { ?>
                            <b>Order ID:</b><?=$folhaobra->id?><br>
                            <b>Payment Due:</b><?= date('d-m-Y', strtotime($folhaobra->data)) ?><br>
                            <?php } ?>
>>>>>>> main
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
<<<<<<< HEAD
                                    <th>Descrição</th>
=======
>>>>>>> main
                                    <th>Quantidade</th>
                                    <th>Preço/Hora</th>
                                    <th>Valor Iva</th>
<<<<<<< HEAD
                                    <th>Valor Unitário</th>
=======
>>>>>>> main
                                    <th>Subtotal</th>
                                </tr>
                                </thead>
                                <tbody>
                                    <tr>
<<<<<<< HEAD
                                        <td>vazio</td>
                                        <td>vazio</td>
                                        <td>vazio</td>
                                        <td>vazio</td>
                                        <td>vazio</td>
                                        <td>vazio</td>
                                        <td>vazio</td>
=======
                                        <td><?=$linhaobra->id_folhaobra?></td>
                                        <td><?=$linhaobra->quantidade?></td>
                                        <td><?=$linhaobra->valorunitario?></td>
                                        <td><?=$linhaobra->valoriva?></td>
                                        <td></td>
>>>>>>> main
                                    </tr>
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
<<<<<<< HEAD
=======
                                        <th style="width:50%">Subtotal:</th>
                                        <td>0€</td>
                                    </tr>
                                    <tr>
>>>>>>> main
                                        <th>Iva Total:</th>
                                        <td>0€</td>
                                    </tr>
                                    <tr>
                                        <th>Valor Total:</th>
                                        <td>0€</td>
                                    </tr>
                                    <tr>
                                        <th>Total:</th>
                                        <td>0€</td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                        <!-- /.col -->
                    </div>
                    <!-- /.row -->

                    <!-- this row will not appear when printing -->
                    <div class="row no-print">
                        <div class="col-12">
                            <button type="button" class="btn btn-success float-right"><i class="far fa-credit-card"></i> Submeter
                            </button>
                        </div>
                    </div>
                </div>
                <!-- /.invoice -->
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</section>
<!-- /.content -->
<!-- /.content-wrapper -->
</body>
</html>
