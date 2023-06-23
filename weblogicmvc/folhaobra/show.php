<div style="text-align: center; border-style: ridge;">
    <h2 class="text-left top-space">IVA Show</h2>
</div>
<div class="row">
    <div class="col-sm-12">
        <table class="table tablestriped">
            <thead>
            <tr>
                <th>Id</th>
                <th>Data</th>
                <th>Valor Total</th>
                <th>Iva Total</th>
                <th>Estado</th>
                <th>Id Cliente</th>
                <th>Id Funcionário</th>
                <th>User Actions</th>
            </tr>
            </thead>

            <tbody>
            <tr>
                <td><?=$folhaobra->id?></td>
                <td><?=$folhaobra->data?></td>
                <td><?=$folhaobra->valortotal?></td>
                <td><?=$folhaobra->ivatotal?></td>
                <td><?=$folhaobra->estado?></td>
                <td><?=$folhaobra->id_cliente?></td>
                <td><?=$folhaobra->id_funcionario?></td>
                <td>
                    <a href="index.php?c=iva&a=edit&id=<?=$folhaobra->id ?>"
                       class="btn btn-info" role="button">Editar</a>
                </td>
            </tr>
            </tbody>
            <tr>
                <td>
                    <a href="router.php?c=folhaobra&a=create" class="btn btn-info" role="button">Criar</a>
                </td>
            </tr>
        </table>
    </div>
</div>
</div>
