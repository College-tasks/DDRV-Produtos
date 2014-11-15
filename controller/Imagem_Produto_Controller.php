<?php

include '../model/Image_Produto.php';
$img = new Image_Produto();

class Imagem_Produto_Controller {

    public function inserir($img) {
        require '../Conecta.php';
        conecta_db() or die("Falha ao conectar a base de dados");
        mysql_query("insert into imagem_produto(imagem, principal, id_produto)"
                        . "values ('$img->imagem','$img->principal','$img->id_produto')") or die("Falha ao inserir imagem");
        mysql_close();
    }

    public function remover($img) {
        require '../Conecta.php';
        conecta_db() or die("Falha ao conectar a base de dados");
        mysql_query("delete imagem_produto where id='$img->id'") or die("Falha ao remover imagem");
        mysql_close();
    }

}
