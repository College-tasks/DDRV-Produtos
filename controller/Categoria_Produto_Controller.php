<?php

require '../DDRV-Produtos/Conecta.php';

class Categoria_Produto_Controller {

    function listarCategoria() {
        $db = new Conecta();
        $db->conecta_db() or die("Falha ao conectar a base de dados");
        $query = mysql_query("select * from categoria_produto") or die("Falha ao retornar usuarios");
        while ($list = mysql_fetch_array($query)) {
            echo 'Id: ' . $list['id'] . ' Categoria: ' . $list['categoria'] . '<br>';
        }
        mysql_close();
    }

}
