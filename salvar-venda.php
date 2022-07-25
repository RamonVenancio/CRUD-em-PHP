<?php
    switch ($_REQUEST["acao"]) {
        case 'cadastro':
            $eNota = $_POST["eNota"];
            $data_venda = $_POST["data_venda"];
            $forma_pag = $_POST["forma_pag"];
            $produto = $_POST["produto"];
            $quantidade = $_POST["quantidade"];
            $descri = $_POST["descri"];
            $valor_uni = $_POST["valor_uni"];
            $observ = $_POST["observ"];

            $sql = "INSERT INTO vendas (eNota, data_venda, forma_pag, produto, quantidade, descri, valor_uni, observ) VALUES ('{$eNota}', '{$data_venda}', '{$forma_pag}', '{$produto}', '{$quantidade}', '{$descri}', '{$valor_uni}', '{$observ}')";

            $res = $conn->query($sql);

            if($res==true){
                print "<script>alert('Cadastro com sucesso');</script>";
                print "<script>location.href='?page=listar';</script>";
            }else{
                print "<script>alert('Não foi possível cadastrar);</script>";
                print "<script>location.href='?page=listar';</script>";
            }
            break;

        case 'editar':
            $eNota = $_POST["eNota"];
            $data_venda = $_POST["data_venda"];
            $forma_pag = $_POST["forma_pag"];
            $produto = $_POST["produto"];
            $quantidade = $_POST["quantidade"];
            $descri = $_POST["descri"];
            $valor_uni = $_POST["valor_uni"];
            $observ = $_POST["observ"];

            $sql = "UPDATE vendas SET
                        eNota='{$eNota}',
                        data_venda='{$data_venda}',
                        forma_pag='{$orma_pag}',
                        produto='{$produto}',
                        quantidade='{$quantidade}',
                        descri='{$descri}',
                        valor_uni='{$valor_uni}',
                        observ='{$observ}'

                    WHERE
                        id=".$_REQUEST["id"];
                    

            $res = $conn->query($sql);

            if($res==true){
                print "<script>alert('Editado com sucesso');</script>";
                print "<script>location.href='?page=listar';</script>";
            }else{
                print "<script>alert('Não foi possível Editar);</script>";
                print "<script>location.href='?page=listar';</script>";
            }

            break;

        case 'excluir':

            $sql = "DELETE FROM vendas WHERE id=".$_REQUEST["id"];

            $res = $conn->query($sql);

            if($res==true){
                print "<script>alert('Excluído com sucesso');</script>";
                print "<script>location.href='?page=listar';</script>";
            }else{
                print "<script>alert('Não foi possível excluir);</script>";
                print "<script>location.href='?page=listar';</script>";
            }

            break;
    }