<?php

require '../DDRV-Produtos/Conecta.php';

class Categoria_Loja_Controller {

    public function listarCategoria() {
        $db = new Conecta();
        $db->conecta_db() or die("Falha ao conectar a base de dados");
        $query = mysql_query("select * from categoria_loja") or die("Falha ao retornar usuarios");
        while ($list = mysql_fetch_array($query)) {
            echo 'Id: ' . $list['id'] . ' Categoria: ' . $list['categoria'] . '<br>';
        }
        mysql_close();
    }

}
