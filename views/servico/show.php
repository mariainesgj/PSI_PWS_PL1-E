<!--<br>
<div style="text-align: center; border-style: ridge;">
    <h2 class="text-left top-space">Produto Show</h2>
</div>
<br><br>-->
<div class="row">
    <div class="col-sm-12">
        <table class="table table-hover">
            <thead>
            <tr>
                <th>ID</th>
                <th>Referência</th>
                <th>Descrição</th>
                <th>Preço</th>
                <th>Stock</th>
                <th>Taxa IVA</th>
                <th>Permissões</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td><?=$servico->id?></td>
                <td><?=$servico->referencia?></td>
                <td><?=$servico->descricao?></td>
                <td><?=$servico->preco?></td>
                <td><?=$servico->stock?></td>
                <td><?=$servico->taxaid?></td>
                <td>
                    <a href="index.php?c=produto&a=edit&id=<?=$servico->id ?>"
                       class="btn btn-info" role="button">Editar</a>
                </td>
            </tr>
            </tbody>
            <tr>
                <td>
                    <a href="index.php?c=produto&a=create" class="btn btn-info" role="button">Criar</a>
                </td>
            </tr>
        </table>
    </div>
</div>
