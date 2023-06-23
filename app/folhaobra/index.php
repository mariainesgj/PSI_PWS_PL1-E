<h2 class="text-left top-space">Iva Index</h2>
<h2 class="top-space"></h2>
<div class="row">
    <div class="col-sm-12">
        <table class="table tablestriped"><thead>
            <th><h3>Id</h3></th>
            <th><h3>Data</h3></th>
            <th><h3>Valor Total</h3></th>
            <th><h3>Iva Total</h3></th>
            <th><h3>Estado</h3></th>
            <th><h3>Id Cliente</h3></th>
            <th><h3>Id Funcionário</h3></th>
            <th><h3>User Actions</h3></th>
            </thead>
            <tbody>
            <?php foreach ($folhaobras as $folhaobra) { ?>
                <tr>
                    <td><?=$folhaobra->id?></td>
                    <td><?=$folhaobra->data?></td>
                    <td><?=$folhaobra->valortotal?></td>
                    <td><?=$folhaobra->ivatotal?></td>
                    <td><?=$folhaobra->estado?></td>
                    <td><?=$folhaobra->id_cliente?></td>
                    <td><?=$folhaobra->id_funcionario?></td>
                    <td>
                        <a href="index.php?c=ivak&a=show&id=<?=$folhaobra->id ?>"
                           class="btn btn-info" role="button">Show</a>
                        <a href="index.php?c=iva&a=edit&id=<?=$folhaobra->id ?>"
                           class="btn btn-info" role="button">Edit</a>
                        <a href="index.php?c=iva&a=delete&id=<?=$folhaobra->id ?>"
                           class="btn btn-warning" role="button">Delete</a>
                    </td>
                </tr>
            <?php } ?>
            </tbody>
        </table>
    </div>
    <div class="col-sm-6">
        <h3>Create a new Folha Obra</h3>
        <p>
            <a href="index.php?c=folhaobra&a=create" class="btn btn-info"
               role="button">New</a>
        </p>
    </div>
</div> <!-- /row -->

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Invoice</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Invoice</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="callout callout-info">
                        <h5><i class="fas fa-info"></i> Note:</h5>
                        This page has been enhanced for printing. Click the print button at the bottom of the invoice to test.
                    </div>


                    <!-- Main content -->
                    <div class="invoice p-3 mb-3">
                        <!-- title row -->
                        <div class="row">
                            <div class="col-12">
                                <h4>
                                    <i class="fas fa-globe"></i> AdminLTE, Inc.
                                    <small class="float-right">Date: 2/10/2014</small>
                                </h4>
                            </div>
                            <!-- /.col -->
                        </div>
                        <!-- info row -->
                        <div class="row invoice-info">
                            <div class="col-sm-4 invoice-col">
                                From
                                <address>
                                    <?php foreach ($empresas as $empresa) { ?>
                                        <tr>
                                            <strong><td><?=$empresa->designacaosocial?></td></strong><br>
                                            <td><?=$empresa->morada?></td>
                                            <td><?=$empresa->codpostal?></td>
                                            <td><?=$empresa->localidade?></td><br>
                                            Telefone: <td><?=$empresa->telefone?></td><br>
                                            Email: <td><?=$empresa->email?></td>
                                        </tr>
                                    <?php } ?>
                                </address>
                            </div>
                            <!-- /.col -->
                            <div class="col-sm-4 invoice-col">
                                To
                                <address>
                                    <strong>Cliente</strong>
                                    <button>Select Cliente</button>
                                </address>
                            </div>
                            <!-- /.col -->
                            <div class="col-sm-4 invoice-col">
                                <b>Invoice #007612</b><br>
                                <br>
                                <b>Order ID:</b> 4F3S8J<br>
                                <b>Payment Due:</b> 2/22/2014<br>
                                <b>Account:</b> 968-34567
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
                                        <th>Id</th>
                                        <th>Data</th>
                                        <th>Estado</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php foreach ($folhaobras as $folhaobra) { ?>
                                        <tr>
                                            <td><?=$folhaobra->id?></td>
                                            <td><?=$folhaobra->data?></td>
                                            <td><?=$folhaobra->estado?></td>
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
                                <img src="../public/dist/img/credit/visa.png" alt="Visa">
                                <img src="../public/dist/img/credit/mastercard.png" alt="Mastercard">
                                <img src="../public/dist/img/credit/american-express.png" alt="American Express">
                                <img src="../public/dist/img/credit/paypal2.png" alt="Paypal">

                                <p class="text-muted well well-sm shadow-none" style="margin-top: 10px;">
                                    Etsy doostang zoodles disqus groupon greplin oooj voxy zoodles, weebly ning heekya handango imeem
                                    plugg
                                    dopplr jibjab, movity jajah plickers sifteo edmodo ifttt zimbra.
                                </p>
                            </div>
                            <!-- /.col -->
                            <div class="col-6">
                                <p class="lead">Amount Due 2/22/2014</p>

                                <div class="table-responsive">
                                    <table class="table">
                                        <tr>
                                            <th style="width:50%">Subtotal:</th>
                                            <td>$250.30</td>
                                        </tr>
                                        <tr>
                                            <th>Tax (9.3%)</th>
                                            <td>$10.34</td>
                                        </tr>
                                        <tr>
                                            <th>Shipping:</th>
                                            <td>$5.80</td>
                                        </tr>
                                        <tr>
                                            <th>Total:</th>
                                            <td>$265.24</td>
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
                                <button type="button" class="btn btn-success float-right"><i class="far fa-credit-card"></i> Submit
                                    Payment
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
</div>
<!-- /.content-wrapper -->
