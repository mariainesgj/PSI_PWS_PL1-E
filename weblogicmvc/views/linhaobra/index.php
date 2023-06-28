<html>
<body>

<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Emitir Folha Obra</h1>
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
                                        <?php } ?>
                                    </tr>
                                </tbody>
                            </table>
                            <div class="row">
                                <div class="col-12">
                                    <form action="selectservico.php?c=linhaobra&a=selectservico&id_folhaobra=<?=$id_folhaobra?>&id_cliente=<?=$cliente->id?>"
                                          method="POST" class="form-horizontal">
                                        <input type="hidden" name="id_folhaobra" value="<?=$id_folhaobra?>">
                                        <div class="form-group row">
                                            <div class="col-sm-4">
                                                <input type="text" class="form-control" id="referencia" name="referencia">
                                            </div>
                                            <div class="col-sm-4">
                                                <button type="submit" class="btn btn-info">Selecionar</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>

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
                            <?php
                            $data = date('d-m-Y', strtotime('+15 days'));
                            $subtotal = 0;
                            $valortotal = 0;
                            $ivatotal = 0;
                            $totalfo = 0;
                            echo  'Prazo de pagamento: ' .$data;
                            foreach ($linhaobras as $linha) {

                                $valortotal = $linha->valortotal;
                                $valor = $linha->valorunitario;
                                $subtotal += $valor;
                                $totalfo += $valor;
                                $iva += $linha->valoriva;
                            }
                            $folhaobra = FolhaObra::find($id_folhaobra);
                            $folhaobra->valortotal = $totalfo;
                            $folhaobra->ivatotal = $iva;
                            $folhaobra->save();
                            ?>
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


