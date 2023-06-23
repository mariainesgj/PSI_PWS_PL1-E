<html>
<body>
<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>User</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="index.php?c=home&a=index">Home</a></li>
                    <li class="breadcrumb-item active">User</li>
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
            <h3 class="card-title">User</h3>

            <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                    <i class="fas fa-minus"></i>
                </button>
            </div>
        </div>
        <div class="card-body p-0">
            <table class="table table-striped projects">
                <thead>
                <tr>
                    <th style="width: 1%">
                        Id
                    </th>
                    <th style="width: 8%">
                        Username
                    </th>
                    <th style="width: 8%">
                        Password
                    </th>
                    <th style="width: 8%">
                        Email
                    </th>
                    <th style="width: 8%">
                        Telefone
                    </th>
                    <th style="width: 10%">
                        Nif
                    </th>
                    <th style="width: 10%">
                        Morada
                    </th>
                    <th style="width: 10%">
                        Cod Postal
                    </th>
                    <th style="width: 8%">
                        Localidade
                    </th>
                    <th style="width: 8%">
                        Role
                    </th>
                    <th style="width: 10%">
                        User Actions
                    </th>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($users as $user) { ?>
                <tr>
                    <td><?=$user->id?></td>
                    <td><?=$user->username?></td>
                    <td><?=$user->password?></td>
                    <td><?=$user->email?></td>
                    <td><?=$user->telefone?></td>
                    <td><?=$user->nif?></td>
                    <td><?=$user->morada?></td>
                    <td><?=$user->codpostal?></td>
                    <td><?=$user->localidade?></td>
                    <td><?=$user->role?></td>
                    <td class="project-actions text-right">
                        <div class="row">
                            <div class="col-md-12 text-right">
                                <div class="btn-group">
                                    <a class="btn btn-primary btn-sm" href="index.php?c=user&a=show&id=<?=$user->id?>">
                                        <i class="fas fa-folder"></i>
                                    </a>
                                    <a class="btn btn-info btn-sm" href="index.php?c=user&a=edit&id=<?=$user->id?>">
                                        <i class="fas fa-pencil-alt"></i>
                                    </a>
                                    <a class="btn btn-danger btn-sm" href="index.php?c=user&a=delete&id=<?=$user->id?>">
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
    <h3>Create a new User</h3>
    <p>
        <a href="index.php?c=user&a=create" class="btn btn-info"
           role="button">New</a>
    </p>
</div>
</body>
</html>