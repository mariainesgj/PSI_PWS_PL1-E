<!--<div >
    <h2 class="text-left top-space">User Show</h2>
</div>-->
<div class="row">
    <div>
        <table class="table table-hover">
            <thead>
            <tr>
                <th>ID</th>
                <th>Nome do Utilizador</th>
                <th>Palavra Passe</th>
                <th>Email</th>
                <th>Telefone</th>
                <th>Nif</th>
                <th>Morada</th>
                <th>Código-Postal</th>
                <th>Localidade</th>
                <th>Papel</th>
                <th>Permissões</th>
            </tr>
            </thead>

            <tbody>
            <tr>
                <td><?=$user->id?></td>
                <td><?=$user->username?></td>
                <td><?=$user->password?></td>
                <td><?=$user->email?></td>
                <td><?=$user->nif?></td>
                <td><?=$user->morada?></td>
                <td><?=$user->codpostal?></td>
                <td><?=$user->localidade?></td>
                <td><?=$user->role?></td>
                <td>
                    <a href="index.php?c=user&a=edit&id=<?=$user->id ?>"
                       class="btn btn-info" role="button">Editar</a>
                </td>
            </tr>
            </tbody>
            <tr>
                <td>
                    <a href="index.php?c=user&a=create" class="btn btn-info" role="button">Criar</a>
                </td>
            </tr>
        </table>
    </div>
</div>
