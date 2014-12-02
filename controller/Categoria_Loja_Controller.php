<?php
require './Conecta.php';

class Categoria_Loja_Controller {

    public function listarCategoria() {
        $db = new Conecta();
        $db->conecta_db() or die("Falha ao conectar a base de dados");
        $query = mysql_query("select id,Categoria from categoria_loja order by Categoria ASC") or die("Falha ao retornar usuarios");
        $arr = Array();
        while ($list = mysql_fetch_array($query)) {

            $categ = new Categoria_Loja();
            $categ->setId($list['id']);
            $categ->setCategoria($list['Categoria']);
            $arr[] = $categ;
        }
        mysql_close();
        return $arr;
    }
}