<?php

require './Conecta.php';
class Usuario_Controller {

   public function inserir($user) {
        $db = new Conecta();
        $db->conecta_db() or die("Falha ao conectar a base de dados");
        mysql_query("insert into usuario(nome, email, senha, nascimento, sexo)"
                        . "values ('$user->nome','$user->email','$user->senha',NULL,NULL);") or die("Erro ao inserir usuario");
        mysql_close();
    }

    public function atualizar($user) {
        $db = new Conecta();
        $db->conecta_db() or die("Falha ao conectar a base de dados");
        mysql_query("update Usuario set Nome='$user->nome', Email='$user->email', Senha='$user->senha', Nascimento='$user->nascimento', sexo='$user->sexo' where id=$user->id;")
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
            $usuario->setEmail($list['Email']);
            $usuario->setID($list['Id']);
            $usuario->setNascimento($list['Nascimento']);
            $usuario->setNome($list['Nome']);
            $usuario->setSenha($list['Senha']);
            $usuario->setSexo($list['Sexo']);
            
            $arr[] = $usuario;
        }
        mysql_close();
        
        return $arr;
    }
        public function selectById($idUsuario) {
        $db = new Conecta();
        $db->conecta_db() or die("Falha ao conectar a base de dados");
        $query = mysql_query("select * from usuario WHERE id = $idUsuario") or die("Falha ao retornar usuarios");
        while ($list = mysql_fetch_array($query)) {
            $usuario = new Usuario();
            $usuario->setId($list['id']);
            $usuario->setEmail($list['email']);
        }
        mysql_close();
        return $usuario;
    }
    
     public function logar($email, $senha) {
        $db = new Conecta();
        $db->conecta_db() or die("Falha ao retornar dados");
        $query = mysql_query("select * from usuario where email=$email and senha=$senha") or die("select * from usuario where email=$email and senha=$senha");
        $num_rows = mysql_num_rows($query);
        if($num_rows > 0){
            return TRUE;
        } else{
            return FALSE;
        }
        mysql_close();
    }
}