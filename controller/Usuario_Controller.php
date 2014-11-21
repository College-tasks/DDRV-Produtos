<?php

require '../DDRV-Produtos/Conecta.php';

class Usuario_Controller {

    public function inserir($user) {
        $db = new Conecta();
        $db->conecta_db() or die("Falha ao conectar a base de dados");
        mysql_query("insert into usuario(nome, email, senha, nascimento, sexo)"
                        . "values ('$user->nome','$user->email','$user->senha','$user->nascimento','$user->sexo');") or die("Erro ao inserir usuario");
        mysql_close();
    }

    public function atualizar($user) {
        $db = new Conecta();
        $db->conecta_db() or die("Falha ao conectar a base de dados");
        mysql_query("update usuario set nome='$user->nome', email='$user->email', senha='$user->senha', nascimento='$user->nascimento', sexo='$user->sexo' where id=$user->id;")
                or die("Erro ao atualizar usuario");
        mysql_close();
    }

    public function listarUsuarios() {
        $db = new Conecta();
        $db->conecta_db() or die("Falha ao conectar a base de dados");
        $query = mysql_query("select * from usuario") or die("Falha ao retornar usuarios");
        $arr = Array();
        while ($list = mysql_fetch_array($query)) {
            $usuario = new Usuario();
            $usuario->setEmail($list['email']);
            $usuario->setID($list['id']);
            $usuario->setNascimento($list['nascimento']);
            $usuario->setNome($list['nome']);
            $usuario->setSenha($list['senha']);
            $usuario->setSexo($list['sexo']);
            
            $arr[] = $usuario;
        }
        mysql_close();
        
        return $arr;
    }

}
