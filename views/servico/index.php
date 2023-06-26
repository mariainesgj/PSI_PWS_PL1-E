<html>
<body>
<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Serviço Index</h1>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>

<!-- Main content -->
<section class="content">

    <!-- Default box -->
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Serviço</h3>
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
                        User Actions
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
                        <td><?=$servico->id_iva?></td>
                        <td class="project-actions text-right">
                            <div class="row">
                                <div class="col-md-12 text-right">
                                    <div class="btn-group">
                                        <a class="btn btn-primary btn-sm" href="index.php?c=servico&a=show&id=<?=$servico->id?>">
                                            <i class="fas fa-folder"></i>
                                        </a>
                                        <a class="btn btn-info btn-sm" href="index.php?c=servico&a=edit&id=<?=$servico->id?>">
                                            <i class="fas fa-pencil-alt"></i>
                                        </a>
                                        <a class="btn btn-danger btn-sm" href="index.php?c=servico&a=delete&id=<?=$servico->id?>">
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

<div class="col-sm-6">
    <h3>Criar um novo Serviço</h3>
    <p>
        <a href="index.php?c=servico&a=create" class="btn btn-info"
           role="button">New</a>
    </p>
</div>
</body>
</html>