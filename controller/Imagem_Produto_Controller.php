<?php

require './Conecta.php';

class Imagem_Produto_Controller {

    public function inserir($img) {
        $db = new Conecta();
        $db->conecta_db() or die("Falha ao conectar a base de dados");
        mysql_query("insert into imagem_produto(imagem, principal, id_produto)"
                        . "values ('$img->imagem','$img->principal','$img->id_produto')") or die("Falha ao inserir imagem");
        mysql_close();
    }

    public function remover($img) {
        $db = new Conecta();
        $db->conecta_db() or die("Falha ao conectar a base de dados");
        mysql_query("delete imagem_produto where id='$img->id'") or die("Falha ao remover imagem");
        mysql_close();
    }

}
