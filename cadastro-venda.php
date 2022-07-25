<h1>Cadastro de Vendas</h1>
<form action="?page=salvar" method="POST">
    <input type="hidden" name="acao" value="cadastro">
    <div class="mb-3">
        <label>eNota</label>
        <input type="number" name="eNota" class="form-control" required>
    </div>
    <div class="mb-3">
        <label>Forma de Pagamento</label>
        <input type="text" name="forma_pag" class="form-control" required>
    </div>
    <div class="mb-3">
        <label>Data de Venda</label>
        <input type="date" name="data_venda" class="form-control" required>
    </div>
    <div class="mb-3">
        <label>Produto</label>
        <input type="text" name="produto" class="form-control" required>
    </div>
    <div class="mb-3">
        <label>Quantidade</label>
        <input type="number" name="quantidade" class="form-control" required>
    </div>
    <div class="mb-3">
        <label>Valor Unitário</label>
        <input type="text" name="valor_uni" class="form-control" required>
    </div>
    <div class="mb-3">
        <label>Descrição</label>
        <input type="text" name="descri" class="form-control" required>
    </div>
    <div class="mb-3">
        <label>Observações</label>
        <input type="text" name="observ" class="form-control">
    </div>
    <div class="mb-3">
        <button type="submit" class= "btn btn-primary">Enviar</button>
    </div>
</form>