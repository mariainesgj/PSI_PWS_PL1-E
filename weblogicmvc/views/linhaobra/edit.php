<html>
<body>
<form action="index.php?c=linhafatura&a=update&id=<?=$linhaobra->id?>" method="post" class="container">
    <div class="mb-3">
        <label for="quantidade" class="form-label">Quantidade: </label>
        <input type="text" class="form-control" id="quantidade" name="quantidade" value="<?=$linhaobra->quantidade?>">
    </div>
    <div class="mb-3">
        <label for="valor" class="form-label">Valor: </label>
        <input type="text" class="form-control" id="valor" name="valor" value="<?=$linhaobra->valor?>">
    </div>
    <div class="mb-3">
        <label for="valoriva" class="form-label">Valor IVA: </label>
        <input type="text" class="form-control" id="valoriva" name="valoriva" value="<?=$linhaobra->valoriva?>">
    </div>
    <div class="mb-3">
        <select class="form-select"  name="referenciaservico">
            <?php foreach($referenciaservico as $servico){?>
                <option><?= $servico->id?></option>
            <?php } ?>
        </select>
    </div>
    <div class="mb-3">
        <select class="form-select"  name="referenciafolhaobra">
            <?php foreach($referenciafolhaobra as $folhaobra){?>
                <option><?= $folhaobra->id?></option>
            <?php } ?>
        </select>
    </div>
    <button type="submit" class="btn btn-primary">Submeter</button>
</form>

</body>
</html>
