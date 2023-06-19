<h2 class="text-left top-space">Linha Obra</h2>
<h2 class="top-space"></h2>
<div class="row">
    <div class="col-sm-12">
        <table class="table tablestriped"><thead>
            <th><h3>ID</h3></th>
            <th><h3>Quantidade</h3></th>
            <th><h3>Valor</h3></th>
            <th><h3>Valor IVA</h3></th>
            <th><h3>Referência do Serviço</h3></th>
            <th><h3>Referência da Folha de Obra</h3></th>
            <th><h3>User Actions</h3></th>
            </thead>
            <tbody>
            <?php foreach ($linhaobra as $linhaobra) { ?>
                <tr>
                    <td><?=$linhaobra->id?></td>
                    <td><?=$linhaobra->quanitdade?></td>
                    <td><?=$linhaobra->valor?></td>
                    <td><?=$linhaobra->valoriva?></td>
                    <td><?=$linhaobra->referenciaservico?></td>
                    <td><?=$linhaobra->referenciafolhaobra?></td>
                </tr>
            <?php } ?>
            </tbody>
        </table>
    </div>
    <div class="col-sm-6">
        <h3>Create a new User</h3>
        <p>
            <a href="index.php?c=book&a=create" class="btn btn-info"
               role="button">New</a>
        </p>
    </div>
</div> <!-- /row -->
<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Projects</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Projects</li>
                </ol>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>

<!-- Main content -->
<section class="content">

    <!-- Default box -->
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Projects</h3>

            <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                    <i class="fas fa-minus"></i>
                </button>
                <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                    <i class="fas fa-times"></i>
                </button>
            </div>
        </div>
        <div class="card-body p-0">
            <table class="table table-striped projects">
                <thead>
                <tr>
                    <th style="width: 1%">
                        #
                    </th>
                    <th style="width: 20%">
                        Project Name
                    </th>
                    <th style="width: 30%">
                        Team Members
                    </th>
                    <th>
                        Project Progress
                    </th>
                    <th style="width: 8%" class="text-center">
                        Status
                    </th>
                    <th style="width: 20%">
                    </th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>
                        #
                    </td>
                    <td>
                        <a>
                            AdminLTE v3
                        </a>
                        <br/>
                        <small>
                            Created 01.01.2019
                        </small>
                    </td>
                    <td>
                        <ul class="list-inline">
                            <li class="list-inline-item">
                                <img alt="Avatar" class="table-avatar" src="../../dist/img/avatar.png">
                            </li>
                            <li class="list-inline-item">
                                <img alt="Avatar" class="table-avatar" src="../../dist/img/avatar2.png">
                            </li>
                            <li class="list-inline-item">
                                <img alt="Avatar" class="table-avatar" src="../../dist/img/avatar3.png">
                            </li>
                            <li class="list-inline-item">
                                <img alt="Avatar" class="table-avatar" src="../../dist/img/avatar4.png">
                            </li>
                        </ul>
                    </td>
                    <td class="project_progress">
                        <div class="progress progress-sm">
                            <div class="progress-bar bg-green" role="progressbar" aria-valuenow="57" aria-valuemin="0" aria-valuemax="100" style="width: 57%">
                            </div>
                        </div>
                        <small>
                            57% Complete
                        </small>
                    </td>
                    <td class="project-state">
                        <span class="badge badge-success">Success</span>
                    </td>
                    <td class="project-actions text-right">
                        <a class="btn btn-primary btn-sm" href="#">
                            <i class="fas fa-folder">
                            </i>
                            View
                        </a>
                        <a class="btn btn-info btn-sm" href="#">
                            <i class="fas fa-pencil-alt">
                            </i>
                            Edit
                        </a>
                        <a class="btn btn-danger btn-sm" href="#">
                            <i class="fas fa-trash">
                            </i>
                            Delete
                        </a>
                    </td>
                </tr>
                </tbody>
            </table>
        </div>
        <!-- /.card-body -->
    </div>
    <!-- /.card -->

</section>
<!-- /.content -->
