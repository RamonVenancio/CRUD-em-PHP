<h1>Consulta de Vendas</h1>
<?php
    $sql = "SELECT * FROM vendas";

    $res = $conn->query($sql);

    $qtd = $res->num_rows;

    if($qtd > 0){
        print "<table class= 'table table-hover table-striped table-bordered'>";
            print "<tr>";
            print "<th>#</th>";
            print "<th>eNota</th>";
            print "<th>Data Venda</th>";
            print "<th>Forma de Pagamento</th>";
            print "<th>Produto</th>";
            print "<th>Quantidade</th>";
            print "<th>Valor Unitário</th>";
            print "<th>Descrição</th>";
            print "<th>Observação</th>";
            print "<th>Ações</th>";
            print "</tr>";
        while($row = $res->fetch_object()){
            print "<tr>";
            print "<td>".$row->id."</td>";
            print "<td>".$row->eNota."</td>";
            print "<td>".$row->data_venda."</td>";
            print "<td>".$row->forma_pag."</td>";
            print "<td>".$row->produto."</td>";
            print "<td>".$row->quantidade."</td>";
            print "<td>".$row->valor_uni."</td>";
            print "<td>".$row->descri."</td>";
            print "<td>".$row->observ."</td>";
            print "<td>
                    <button onclick=\"location.href='?page=editar&id=".$row->id."';\" class='btn btn-success'>Editar</button>

                    <button onclick=\"if (confirm('Tem certeza que deseja excluir?')){location.href='?page=salvar&acao=excluir&id=".$row->id."';}else{false;}\" class='btn btn-danger'>Excluir</button>
                    </td>";
            print "</tr>";
        }
        print "</table>";
    }else{
        print "<p class='alert alert-danger'>Não encontrou resultados!</p>";
    }
?>


