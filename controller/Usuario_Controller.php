<?php

include '../model/Usuario.php';
$user = new Usuario();

class Usuario_Controller {

    public function inserir($user) {
        require '../Conecta.php';
        conecta_db() or die("Falha ao conectar a base de dados");
        mysql_query("insert into usuario(nome, email, senha, nascimento, sexo)"
                        . "values ('$user->nome','$user->email','$user->senha','$user->nascimento','$user->sexo');") or die("Erro ao inserir usuario");
        mysql_close();
    }

    public function atualizar($user) {
        require '../Conecta.php';
        conecta_db() or die("Falha ao conectar a base de dados");
        mysql_query("update usuario set nome='$user->nome', email='$user->email', senha='$user->senha', nascimento='$user->nascimento', sexo='$user->sexo' where id=$user->id;")
                or die("Erro ao atualizar usuario");
        mysql_close();
    }

    public function listarUsuarios() {
        require '../Conecta.php';
        conecta_db() or die("Falha ao conectar a base de dados");
        $query = mysql_query("select * from usuario") or die("Falha ao retornar usuarios");
        while ($list = mysql_fetch_array($query)) {
            echo 'Nome: ' . $list['nome'] . ' Email:' . $list['email'] . '<br>';
        }
        mysql_close();
    }

}
