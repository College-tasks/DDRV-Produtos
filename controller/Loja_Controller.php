<?php

require '../DDRV-Produtos/Conecta.php';

class Loja_Controller {

    public function inserir($loja) {
        $db = new Conecta();
        $db->conecta_db() or die("Falha ao conectar a base de dados");
        mysql_query("insert into loja(email, senha, razaosocial, endereco, telefone, id_categoria)"
                        . "values ('$loja->email','$loja->senha','$loja->razaoSocial','$loja->endereco','$loja->telefone','$loja->id_categoria');") or die("Erro ao inserir usuario");
        mysql_close();
    }

    public function atualizar($loja) {
        $db = new Conecta();
        $db->conecta_db() or die("Falha ao conectar a base de dados");
        mysql_query("update loja set email='$loja->email', senha='$loja->senha', razaosocial='$loja->razaoSocial', endereco='$loja->endereco', telefone='$loja->telefone', '$loja->id_categoria' where id=$loja->id;")
                or die("Erro ao atualizar usuario");
        mysql_close();
    }

    public function listarLoja() {
        $db = new Conecta();
        $db->conecta_db() or die("Falha ao conectar a base de dados");
        $query = mysql_query("select * from loja") or die("Falha ao retornar usuarios");

        $arr = Array();

        while ($list = mysql_fetch_array($query)) {
            $loja = new Loja();
            $loja->setId($list['id']);
            $loja->setEmail($list['email']);

            $catCont = new Categoria_Controller();
            $cat = $catCont->selectById($list['idCategoria']);

            $loja->setCategoria($cat->getCategoria());

            $arr[] = $loja;
        }
        mysql_close();

        return $arr;
    }

    public function selectById($idLoja) {
        $db = new Conecta();
        $db->conecta_db() or die("Falha ao conectar a base de dados");
        $query = mysql_query("select * from loja WHERE id = $idLoja") or die("Falha ao retornar usuarios");

        $loja = new Loja();

        while ($list = mysql_fetch_array($query)) {

            $loja->setId($list['id']);
            $loja->setEmail($list['email']);
        }
        mysql_close();

        return $loja;
    }

}
