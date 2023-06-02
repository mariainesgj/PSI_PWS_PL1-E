<html>
<body>
<form action="index.php?c=empresa&a=update&id=<?=$empresa->id ?>" method="POST" class="container">
    <div class="mb-3">
        <label for="designacao" class="form-label">Designação Social:</label>
        <input type="text" class="form-control" id="designacao" name="designacao" value="<?=$empresa->designacao?>">
    </div>
    <div class="mb-3">
        <label for="email" class="form-label">Email: </label>
        <input type="text" class="form-control" id="email" name="email" value="<?=$empresa->email?>">
    </div>
    <div class="mb-3">
        <label for="telefone" class="form-label">Telefone: </label>
        <input type="text" class="form-control" id="telefone" name="telefone" value="<?=$empresa->telefone?>">
    </div>
    <div class="mb-3">
        <label for="nif" class="form-label">NIF: </label>
        <input type="text" class="form-control" id="nif" name="nif" value="<?=$empresa->nif?>">
    </div>
    <div class="mb-3">
        <label for="campo5" class="form-label">Morada:</label>
        <input type="text" class="form-control" id="campo5" name="morada" value="<?=$empresa->morada?>">
    </div>
    <div class="mb-3">
        <label for="codpostal" class="form-label">Código-Postal: </label>
        <input type="text" class="form-control" id="codpostal" name="codpostal" value="<?=$empresa->codpostal?>">
    </div>
    <div class="mb-3">
        <label for="localidade" class="form-label">Localidade: </label>
        <input type="text" class="form-control" id="localidade" name="localidade" value="<?=$empresa->localidade?>">
    </div>
    <div class="mb-3">
        <label for="capitalsocial" class="form-label">Capital Social:</label>
        <input type="text" class="form-control" id="capitalsocial" name="capitalsocial" value="<?=$empresa->capitalsocial?>">
    </div>

    <button type="submit" class="btn btn-primary">Submeter</button>
</form>
</body>
</html>