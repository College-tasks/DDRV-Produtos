<?php

require '../DDRV-Produtos/Conecta.php';

class Categoria_Loja_Controller {

    public function listarCategoria() {
        $db = new Conecta();
        $db->conecta_db() or die("Falha ao conectar a base de dados");
        $query = mysql_query("select * from categoria_loja") or die("Falha ao retornar usuarios");
        $arr = Array();
        while ($list = mysql_fetch_array($query)) {
            $categ = new Categoria_Loja();
            $categ->setId($list['id']);
            $categ->setCategoria($list['categoria']);
            $arr[] = $categ;
        }
        mysql_close();
        return $arr;
    }

}
