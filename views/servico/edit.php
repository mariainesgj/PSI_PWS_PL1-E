<html>
<body>
<form action="index.php?c=produto&a=update&id=<?=$servico->id ?>" method="POST" class="container">
    <div class="mb-3">
        <label for="referencia" class="form-label">Referência: </label>
        <input type="text" class="form-control" id="referencia" name="referencia" value="<?=$servico->referencia?>">
    </div>
    <div class="mb-3">
        <label for="descricao" class="form-label">Descrição: </label>
        <input type="text" class="form-control" id="descricao" name="descricao" value="<?= $servico->descricao?>">
    </div>
    <div class="mb-3">
        <label for="preco" class="form-label">Preço: </label>
        <input type="text" class="form-control" id="preco" name="preco" value="<?=$servico->preco?>">
    </div>
    <div class="mb-3">
        <label for="stock" class="form-label">Stock: </label>
        <input type="text" class="form-control" id="stock" name="stock" value="<?=$servico->stock?>">
    </div>
    <div class="mb-3">
        <label for="taxaiva" class="form-label">Taxa IVA: </label>
        <input type="text" class="form-control" id="taxaiva" name="taxaiva" value="<?= $servico->taxaiva?>">
    </div>
    <button type="submit" class="btn btn-primary">Submeter</button>
</form>

</body>
</html>