<div style="text-align: center; border-style: ridge;">
    <h2 class="text-left top-space">Empresa Show</h2>
</div>
<div class="row">
    <div class="col-sm-12">
        <table class="table table-hover">
            <thead>
            <tr>
                <th>ID</th>
                <th>Designação Social</th>
                <th>Email</th>
                <th>Telefone</th>
                <th>NIF</th>
                <th>Morada</th>
                <th>Código-Postal</th>
                <th>Localidade</th>
                <th>Capital Social</th>
                <th>Permisões</th>
            </tr>
            </thead>
            <tbody>
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
                <td>
                    <a href="index.php?c=empresa&a=edit&id=<?=$empresa->id ?>"
                       class="btn btn-info" role="button">Editar</a>
                </td>
            </tr>
            </tbody>
            <tr>
                <td>
                    <a href="index.php?c=empresa&a=create" class="btn btn-info" role="button">Criar</a>
                </td>
            </tr>
        </table>
    </div>
</div>