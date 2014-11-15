<?php

include '../model/Loja.php';
$loja = new Loja();

class Loja_Controller{

    public function inserir($loja) {
        require '../Conecta.php';
        conecta_db() or die("Falha ao conectar a base de dados");
        mysql_query("insert into loja(email, senha, razaosocial, endereco, telefone, id_categoria)"
                        . "values ('$loja->email','$loja->senha','$loja->razaoSocial','$loja->endereco','$loja->telefone','$loja->id_categoria');") or die("Erro ao inserir usuario");
        mysql_close();
    }

    public function atualizar($loja) {
        require '../Conecta.php';
        conecta_db() or die("Falha ao conectar a base de dados");
        mysql_query("update loja set email='$loja->email', senha='$loja->senha', razaosocial='$loja->razaoSocial', endereco='$loja->endereco', telefone='$loja->telefone', '$loja->id_categoria' where id=$loja->id;")
                or die("Erro ao atualizar usuario");
        mysql_close();
    }

    public function listarLoja() {
        require '../Conecta.php';
        conecta_db() or die("Falha ao conectar a base de dados");
        $query = mysql_query("select * from loja") or die("Falha ao retornar usuarios");
        while ($list = mysql_fetch_array($query)) {
            echo 'Razão Social: ' . $list['razaosocial'] . ' Email:' . $list['email'] . '<br>';
        }
        mysql_close();
    }

}
