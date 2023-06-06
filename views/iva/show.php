<!--<br>
<div style="text-align: center; border-style: ridge;">
    <h2 class="text-left top-space">IVA Show</h2>
</div>
<br><br>-->
<div class="row">
    <div class="col-sm-12">
        <table class="table tablestriped">
            <thead>
            <tr>
                <th>ID</th>
                <th>Percentagem de Iva</th>
                <th>Descrição</th>
                <th>Vigor</th>
                <th>Permissões</th>
            </tr>
            </thead>

            <tbody>
            <tr>
                <td><?=$iva->id?></td>
                <td><?=$iva->percentagem?></td>
                <td><?=$iva->descricao?></td>
                <td><?=$iva->vigor?></td>
                <td>
                    <a href="index.php?c=iva&a=edit&id=<?=$iva->id ?>"
                       class="btn btn-info" role="button">Editar</a>
                </td>
            </tr>
            </tbody>
            <tr>
                <td>
                    <a href="index.php?c=iva&a=create" class="btn btn-info" role="button">Criar</a>
                </td>
            </tr>
        </table>
    </div>
</div>
</div>