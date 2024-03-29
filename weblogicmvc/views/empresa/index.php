<html>
<body>
<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Empresa Index</h1>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>

<!-- Main content -->
<section class="content">

    <!-- Default box -->
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Empresa</h3>
        </div>
        <div class="card-body p-0">
            <table class="table table-striped projects">
                <thead>
                <tr>
                    <th style="width: 1%">
                        Id
                    </th>
                    <th style="width: 15%">
                        Designação Social
                    </th>
                    <th style="width: 5%">
                        Email
                    </th>
                    <th style="width: 5%">
                        Telefone
                    </th>
                    <th style="width: 5%">
                        Nif
                    </th>
                    <th style="width: 8%">
                        Morada
                    </th>
                    <th style="width: 10%">
                        Código-Postal
                    </th>
                    <th style="width: 10%">
                        Localidade
                    </th>
                    <th style="width: 10%">
                        Capital Social
                    </th>
                    <th style="width: 10%">
                        User Actions
                    </th>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($empresas as $empresa) { ?>
                    <tr>
                        <td><?=$empresa->id?></td>
                        <td><?=$empresa->designacaosocial?></td>
                        <td><?=$empresa->email?></td>
                        <td><?=$empresa->telefone?></td>
                        <td><?=$empresa->nif?></td>
                        <td><?=$empresa->morada?></td>
                        <td><?=$empresa->codpostal?></td>
                        <td><?=$empresa->localidade?></td>
                        <td><?=$empresa->capitalsocial?></td>
                        <td class="project-actions text-right">
                            <div class="row">
                                <div class="col-md-12 text-right">
                                    <div class="btn-group">
                                        <a class="btn btn-primary btn-sm" href="index.php?c=empresa&a=show&id=<?=$empresa->id?>">
                                            <i class="fas fa-folder"></i>
                                        </a>
                                        <a class="btn btn-info btn-sm" href="index.php?c=empresa&a=edit&id=<?=$empresa->id?>">
                                            <i class="fas fa-pencil-alt"></i>
                                        </a>
                                        <a class="btn btn-danger btn-sm" href="index.php?c=empresa&a=delete&id=<?=$empresa->id?>">
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
    <h3>Criar uma nova empresa</h3>
    <p>
        <a href="index.php?c=empresa&a=create" class="btn btn-info"
           role="button">New</a>
    </p>
</div>
</body>
</html>

