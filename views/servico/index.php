<h2 class="text-left top-space">Serviço Index</h2>
<h2 class="top-space"></h2>
<div class="row">
    <div class="col-sm-12">
        <table class="table tablestriped"><thead>
            <th><h3>Id</h3></th>
            <th><h3>Referência</h3></th>
            <th><h3>Descrição</h3></th>
            <th><h3>Preço/Hora</h3></th>
            <th><h3>Id Iva</h3></th>
            <th><h3>User Actions</h3></th>
            </thead>
            <tbody>
            <?php foreach ($servicos as $servico) { ?>
                <tr>
                    <td><?=$servico->id?></td>
                    <td><?=$servico->referencia?></td>
                    <td><?=$servico->descricao?></td>
                    <td><?=$servico->precohora?></td>
                    <td><?=$servico->id->iva?></td>
                    <td>
                        <a href="index.php?c=ivak&a=show&id=<?=$servico->id ?>"
                           class="btn btn-info" role="button">Show</a>
                        <a href="index.php?c=iva&a=edit&id=<?=$servico->id ?>"
                           class="btn btn-info" role="button">Edit</a>
                        <a href="index.php?c=iva&a=delete&id=<?=$servico->id ?>"
                           class="btn btn-warning" role="button">Delete</a>
                    </td>
                </tr>
            <?php } ?>
            </tbody>
        </table>
    </div>
    <div class="col-sm-6">
        <h3>Create a new Iva</h3>
        <p>
            <a href="index.php?c=iva&a=create" class="btn btn-info"
               role="button">New</a>
        </p>
    </div>
</div> <!-- /row -->
