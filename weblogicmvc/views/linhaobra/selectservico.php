<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Serviço</h1>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>

<!-- Main content -->
<section class="content">

    <!-- Default box -->
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Select Serviço</h3>
        </div>
        <div class="card-body p-0">
            <table class="table table-striped projects">
                <thead>
                <tr>
                    <th style="width: 1%">
                        Id
                    </th>
                    <th style="width: 8%">
                        Referência
                    </th>
                    <th style="width: 10%">
                        Descrição
                    </th>
                    <th style="width: 8%">
                        Preço/Hora
                    </th>
                    <th style="width: 8%">
                        Id Iva
                    </th>
                    <th style="width: 1%">
                        Select
                    </th>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($servicos as $servico) { ?>
                    <tr>
                        <td><?=$servico->id?></td>
                        <td><?=$servico->referencia?></td>
                        <td><?=$servico->descricao?></td>
                        <td><?=$servico->precohora?></td>
                        <td><?= $servico->id_iva?></td>
                        <td class="project-actions text-right">
                            <div class="row">
                                <div class="col-md-12 text-right">
                                    <div class="btn-group">
                                        <a href="index.php?c=linhaobra&a=store&id_folhaobra=<?=$id_folhaobra?>&id_servico=<?=$servico->id?>&id_cliente=<?=$id_cliente?>"
                                           class="btn btn-info" role="button">Selecionar</a>
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
