<html>
<body>
<form action="index.php?c=folhaobra&a=update&id=<?=$folhaobra->id ?>" method="post" class="container">
    <div class="mb-3">
        <label for="data" class="form-label">Data: </label>
        <input type="text" class="form-control" id="data" name="data" value="<?=$folhaobra->data?>">
    </div>
    <div class="mb-3">
        <label for="valortotal" class="form-label">Valor Total: </label>
        <input type="text" class="form-control" id="valortotal" name="valortotal" value="<?=$folhaobra->valortotal?>">
    </div>
    <div class="mb-3">
        <label for="ivatotal" class="form-label">Iva Total: </label>
        <input type="text" class="form-control" id="ivatotal" name="ivatotal" value="<?=$folhaobra->ivatotal?>">
    </div>
    <div class="mb-3">
        <label for="estado" class="form-label">Estado: </label>
        <input type="text" class="form-control" id="estado" name="estado" value="<?=$folhaobra->estado?>">
    </div>
    <div class="mb-3">
        <label for="idcliente" class="form-label">Id Cliente: </label>
        <input type="text" class="form-control" id="idcliente" name="idcliente" value="<?=$folhaobra->id_cliente?>">
    </div>
    <div class="mb-3">
        <label for="idfuncionario" class="form-label">Id Funcionario: </label>
        <input type="text" class="form-control" id="idfuncionario" name="idfuncionario" value="<?=$folhaobra->id_funcionario?>">
    </div>
    <button type="submit" class="btn btn-primary">Submeter</button>
</form>

</body>
</html>
