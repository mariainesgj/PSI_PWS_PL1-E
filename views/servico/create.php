<html>
<body>
<form action="index.php?c=produto&a=store" method="POST" class="container">
    <div class="mb-3">
        <label for="referencia" class="form-label">Referencia: </label>
        <input type="text" class="form-control" id="referencia" name="referencia">
    </div>
    <div class="mb-3">
        <label for="descricao" class="form-label">Descrição: </label>
        <input type="text" class="form-control" id="descricao" name="descricao">
    </div>
    <div class="mb-3">
        <label for="preco" class="form-label">Preço: </label>
        <input type="text" class="form-control" id="preco" name="preco">
    </div>
    <div class="mb-3">
        <label for="stock" class="form-label">Stock: </label>
        <input type="text" class="form-control" id="stock" name="stock">
    </div>

    <div class="mb-3">
        <select class="form-select" aria-label="Default select example" name="taxaiva">
            <option selected>Taxa IVA</option>
            <?php foreach($ivas as $iva){?>
                <option><?= $iva->id?></option>
            <?php } ?>
        </select>
    </div>
    <button type="submit" class="btn btn-primary">Submeter</button>
</form>
</body>
</html>
