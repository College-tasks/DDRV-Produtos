<?php

include '../model/Categoria_Produto.php';
$categoria = new Categoria_Produto();

class Categoria_Produto_Controller {

    function listarCategoria() {
        require '../Conecta.php';
        conecta_db() or die("Falha ao conectar a base de dados");
        $query = mysql_query("select * from categoria_produto") or die("Falha ao retornar usuarios");
        while ($list = mysql_fetch_array($query)) {
            echo 'Id: ' . $list['id'] . ' Categoria: ' . $list['categoria'] . '<br>';
        }
        mysql_close();
    }

}
