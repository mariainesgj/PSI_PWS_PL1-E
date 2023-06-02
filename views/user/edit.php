<html>
<body>
<form action="index.php?c=user&a=update&id=<?= $user->id ?>" method="POST" class="container">
    <div class="mb-3">
        <label for="username" class="form-label">Nome do Utilizador: </label>
        <input type="text" class="form-control" id="username" name="username" value="<?=$user->username?>">
    </div>
    <div class="mb-3">
        <label for="password" class="form-label">Palavra Passe: </label>
        <input type="text" class="form-control" id="password" name="password" value="<?=$user->password?>">
    </div>
    <div class="mb-3">
        <label for="email" class="form-label">Email: </label>
        <input type="text" class="form-control" id="email" name="email" value="<?=$user->email?>">
    </div>
    <div class="mb-3">
        <label for="telefone" class="form-label">Telefone:</label>
        <input type="text" class="form-control" id="telefone" name="telefone" value="<?=$user->telefone?>">
    </div>
    <div class="mb-3">
        <label for="nif" class="form-label">Nif: </label>
        <input type="text" class="form-control" id="nif" name="nif" value="<?=$user->nif?>">
    </div>
    <div class="mb-3">
        <label for="morada" class="form-label">Morada: </label>
        <input type="text" class="form-control" id="morada" name="morada" value="<?=$user->morada?>">
    </div>
    <div class="mb-3">
        <label for="codpostal" class="form-label">Código-Postal: </label>
        <input type="text" class="form-control" id="codpostal" name="codpostal" value="<?=$user->codpostal?>">
    </div>
    <div class="mb-3">
        <label for="localidade" class="form-label">Localidade: </label>
        <input type="text" class="form-control" id="localidade" name="localidade" value="<?=$user->localidade?>">
    </div>
    <button type="submit" class="btn btn-primary">Submeter</button>
</form>
</body>
</html>