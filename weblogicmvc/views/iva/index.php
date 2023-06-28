<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Iva Index</h1>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>

<!-- Main content -->
<section class="content">

    <!-- Default box -->
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Iva</h3>
        </div>
        <div class="card-body p-0">
            <table class="table table-striped projects">
                <thead>
                <tr>
                    <th style="width: 20%">
                        Id
                    </th>
                    <th style="width: 20%">
                        Percentagem do IVA
                    </th>
                    <th style="width: 20%">
                        Descrição
                    </th>
                    <th style="width: 20%">
                        Em vigor
                    </th>
                    <th style="width: 10%">
                        User Actions
                    </th>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($ivas as $iva) { ?>
                    <tr>
                        <td><?=$iva->id?></td>
                        <td><?=$iva->percentagem?></td>
                        <td><?=$iva->descricao?></td>
                        <td><?=$iva->vigor?></td>
                        <td class="project-actions text-right">
                            <div class="row">
                                <div class="col-md-12 text-right">
                                    <div class="btn-group">
                                        <a class="btn btn-primary btn-sm" href="index.php?c=iva&a=show&id=<?=$iva->id?>">
                                            <i class="fas fa-folder"></i>
                                        </a>
                                        <a class="btn btn-info btn-sm" href="index.php?c=iva&a=edit&id=<?=$iva->id?>">
                                            <i class="fas fa-pencil-alt"></i>
                                        </a>
                                        <a class="btn btn-danger btn-sm" href="index.php?c=iva&a=delete&id=<?=$iva->id?>">
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
    <h3>Criar um novo Iva</h3>
    <p>
        <a href="index.php?c=iva&a=create" class="btn btn-info"
           role="button">New</a>
    </p>
</div>