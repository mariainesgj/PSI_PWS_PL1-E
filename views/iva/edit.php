<html>
<body>
<form action="index.php?c=iva&a=update&id=<?=$iva->id ?>" method="post" class="container">
    <div class="mb-3">
        <label for="percentagem" class="form-label">Percentagem do Iva: </label>
        <input type="text" class="form-control" id="percentagem" name="percentagem" value="<?=$iva->percentagem?>">
    </div>
    <div class="mb-3">
        <label for="descricao" class="form-label">Descrição: </label>
        <input type="text" class="form-control" id="descricao" name="descricao" value="<?=$iva->descricao?>">
    </div>
    <div class="mb-3">
        <label for="vigor" class="form-label">Em Vigor: </label>
        <input type="text" class="form-control" id="vigor" name="vigor" value="<?=$iva->vigor?>">
    </div>
    <button type="submit" class="btn btn-primary">Submeter</button>
</form>

</body>
</html>