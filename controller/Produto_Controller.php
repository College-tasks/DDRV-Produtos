<?php

require '../DDRV-Produtos/Conecta.php';

class Produto_Controller {

    public function inserir($produto) {
        $db = new Conecta();
        $db->conecta_db() or die("Falha ao conectar a base de dados");
        mysql_query("insert into produto(nome, preco, descricao, id_categoria, id_loja)"
                        . "values('$produto->nome','$produto->preco','$produto->descricao','$produto->id_categoria','$produto->id_loja')") or die("Falha ao inserir produto");
        mysql_close();
    }

    public function atualizar($produto) {
        $db = new Conecta();
        $db->conecta_db() or die("Falha ao conectar a base de dados");
        mysql_query("update produto set nome='$produto->nome', preco='$produto->preco', descricao='$produto->descricao', id_categoria='$produto->id_categoria', id_loja='$produto->id_loja' where id=$produto->id;")
                or die("Erro ao atualizar usuario");
        mysql_close();
    }

    public function listarProdutos() {
        $db = new Conecta();
        $db->conecta_db() or die("Falha ao conectar a base de dados");
        $query = mysql_query("select * from produto") or die("Falha ao retornar usuarios");
        while ($list = mysql_fetch_array($query)) {
            echo 'Produto: ' . $list['nome'] . ' Preço: ' . $list['preco'] . '<br>';
        }
        mysql_close();
    }

}
