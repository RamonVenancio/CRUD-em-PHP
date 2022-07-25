<h1>Editar Vendas</h1>
<?php
    $sql = "SELECT * FROM vendas WHERE id=".$_REQUEST["id"];
    $res = $conn->query($sql);
    $row = $res->fetch_object();
    ?>

<form action="?page=salvar" method="POST">
    <input type="hidden" name="acao" value="editar">
    <input type="hidden" name="id" value="<?php print $row->id;?>">
    <div class="mb-3">
        <label>eNota</label>
        <input type="number" name="eNota" value="<?php print $row->eNota; ?>" class="form-control">
    </div>
    <div class="mb-3">
        <label>Forma de Pagamento</label>
        <input type="text" name="forma_pag" value="<?php print $row->forma_pag; ?>" class="form-control">
    </div>
    <div class="mb-3">
        <label>Data de Venda</label>
        <input type="date" name="data_venda" value="<?php print $row->data_venda; ?>"  class="form-control">
    </div>
    <div class="mb-3">
        <label>Produto</label>
        <input type="text" name="produto" value="<?php print $row->produto; ?>"  class="form-control" required>
    </div>
    <div class="mb-3">
        <label>Quantidade</label>
        <input type="number" name="quantidade" value="<?php print $row->quantidade; ?>"  class="form-control" required>
    </div>
    <div class="mb-3">
        <label>Valor Unitário</label>
        <input type="text" name="valor_uni" value="<?php print $row->valor_uni; ?>"  class="form-control" required>
    </div>
    <div class="mb-3">
        <label>Descrição</label>
        <input type="text" name="descri" value="<?php print $row->descri; ?>"  class="form-control" required>
    </div>
    <div class="mb-3">
        <label>Observações</label>
        <input type="text" name="observ" value="<?php print $row->observ; ?>"  class="form-control">
    </div>
    <div class="mb-3">
        <button type="submit" class= "btn btn-primary">Enviar</button>
    </div>
</form>