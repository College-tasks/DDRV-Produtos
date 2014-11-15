<?php

include '../model/Produto_Favorito.php';
$favorito = new Produto_Favorito();

class Produto_Favorito_Controller {

    public function inserir($favorito) {
        require '../Conecta.php';
        conecta_db() or die("Falha ao conectar a base de dados");
        mysql_query("insert into produto_favorito(id_usuario, id_produto) values ('$favorito->id_usuario','$favorito->id_produto');") or die("Erro ao inserir usuario");
        mysql_close();
    }

    public function remover($favorito) {
        require '../Conecta.php';
        conecta_db() or die("Falha ao conectar a base de dados");
        mysql_query("delete produto_favorito where id_usuario='$favorito->id_usuario' and id_produto='$favorito->id_produto'") or die("Falha ao remover imagem");
        mysql_close();
    }

}
