<html>
<body>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>User Create</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="index.php?c=home&a=index">Home</a></li>
                        <li class="breadcrumb-item active">Iva Create</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
<!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-md-6">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">IVA</h3>
                </div>
                <form action="index.php?c=iva&a=store" method="POST" class="container">
                    <div class="card-body">
                        <div class="mb-3">
                            <label for="percentagem" class="form-label">Percentagem do Iva:</label>
                            <input type="text" class="form-control" id="percentagem" name="percentagem">
                        </div>
                        <div class="mb-3">
                            <label for="descricao" class="form-label">Descrição:</label>
                            <input type="text" class="form-control" id="descricao" name="descricao">
                        </div>
                        <div class="mb-3">
                            <label for="vigor" class="form-label">Em Vigor:</label>
                            <input type="text" class="form-control" id="vigor" name="vigor">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="float-left">
                                <a href="index.php?c=iva&a=index" class="btn btn-secondary">Cancel</a>
                            </div>
                            <div class="float-right">
                                <input type="submit" value="Create new IVA" class="btn btn-success">
                            </div>
                        </div>
                    </div>
                </form>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
    </div>
</section>
<!-- /.content -->
</div>

</body>
</html>
