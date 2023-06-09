<!--<br>
<div style="text-align: center; border-style: ridge;">
    <h2 class="text-left top-space">Linha Obra Show</h2>
</div>
<br><br>-->
<div class="row">
    <div class="col-sm-12">
        <table class="table tablestriped">
            <thead>
            <tr>
                <th>ID</th>
                <th>Quantidade</th>
                <th>Valor</th>
                <th>Valor IVA</th>
                <th>Referência do Serviço</th>
                <th>Referência da Folha de Obra</th>
            </tr>
            </thead>

            <tbody>
            <tr>
                <td><?=$linhaobra->id?></td>
                <td><?=$linhaobra->quantidade?></td>
                <td><?=$linhaobra->valor?></td>
                <td><?=$linhaobra->referenciaservico?></td>
                <td><?=$linhaobra->referenciafolhaobra?></td>
                <td>
                    <a href="index.php?c=linhaobra&a=edit&id=<?=$linhaobra->id ?>"
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
