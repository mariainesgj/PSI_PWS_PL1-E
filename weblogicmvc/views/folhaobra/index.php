<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Folha Obras Emitidas</h1>
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
        <div class="card-body p-0">
            <table class="table table-striped projects">
                <thead>
                <tr>
                    <th style="width: 1%">
                        Id
                    </th>
                    <th style="width: 8%">
                        Data
                    </th>
                    <th style="width: 8%">
                        Valor Total
                    </th>
                    <th style="width: 8%">
                        Iva Total
                    </th>
                    <th style="width: 8%">
                        Estado
                    </th>
                    <th style="width: 10%">
                        Id Cliente
                    </th>
                    <th style="width: 10%">
                        Id Funcionário
                    </th>
                    <th style="width: 1%">
                        User Actions
                    </th>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($folhaobras as $folhaobra) { ?>
                    <tr>
                        <td><?=$folhaobra->id?></td>
                        <td><?=date('d-m-Y', strtotime($folhaobra->data))?></td>
                        <td><?=$folhaobra->valortotal?></td>
                        <td><?=$folhaobra->ivatotal?></td>
                        <td><?=$folhaobra->estado?></td>
                        <td><?=$folhaobra->id_cliente?></td>
                        <td><?=$folhaobra->id_funcionario?></td>
                        <td class="project-actions text-right">
                            <div class="row">
                                <div class="col-md-12 text-right">
                                    <div class="btn-group">
                                        <a class="btn btn-primary btn-sm" href="index.php?c=folhaobra&a=show&id=<?=$folhaobra->id?>">
                                            <i class="fas fa-folder"></i>
                                        </a>
                                        <a class="btn btn-info btn-sm" href="index.php?c=folhaobra&a=edit&id=<?=$folhaobra->id?>">
                                            <i class="fas fa-pencil-alt"></i>
                                        </a>
                                        <a class="btn btn-secondary btn-sm" href="index.php?c=folhaobra&a=imprimirfo&id=<?=$folhaobra->id?>&id_cliente=<?=$folhaobra->id_cliente?>">
                                            <i class="fas fa-print"></i>
                                        </a>
                                        <a class="btn btn-danger btn-sm" href="index.php?c=folhaobra&a=delete&id=<?=$folhaobra->id?>">
                                            <i class="fas fa-trash"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </td>
                    </tr>
                <?php } ?>
                </tbody>
            </table>
        </div>
        <!-- /.card-body -->
    </div>
    <!-- /.card -->
</section>
<!-- /.content -->