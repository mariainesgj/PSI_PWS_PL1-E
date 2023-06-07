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
