<?php
require './Conecta.php';
//include 'model/Loja.php';
class Loja_Controller {
    public function inserir($loja) {
        $db = new Conecta();
        $db->conecta_db() or die("Falha ao conectar a base de dados");
        mysql_query("insert into loja(email, senha, razaosocial, endereco, telefone, id_categoria)"
                        . "values ('$loja->email','$loja->senha','$loja->razaoSocial','$loja->endereco','$loja->telefone','$loja->id_categoria')") or die("Erro ao inserir usuario");
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
        $query = mysql_query("select * from loja WHERE id = $idLoja") or die("Falha ao retornar loja");
        while ($list = mysql_fetch_array($query)) {
            $loja = new Loja();
            $loja->setId($list['id']);
            $loja->setEmail($list['email']);
        }
        mysql_close();
        return $loja;
    }
    public function favoritados($idLoja) {
        $db = new Conecta();
        $db->conecta_db() or die("Falha ao conectar a base de dados");
        $query = mysql_query("select p.nome as nome, count(u.id) as quantidade from loja l, produto p, produto_favorito pf, usuario u where l.id = '$idLoja' and l.id = p.id_loja and p.id = pf.id_produto and pf.id_usuario = u.id group by p.nome having count(u.id) > 0") or die("Falha ao retornar usuarios");
        $arr = Array();
        while ($list = mysql_fetch_array($query)) {
            $arr['nome'] = $list['nome'];
            $arr['quantidade'] = $list['quantidade'];
        }
        mysql_close();
        return $arr;
    }
     public function logar($email, $senha) {
        $db = new Conecta();
        $db->conecta_db() or die("Falha ao retornar dados");
        $query = mysql_query("select * from loja where email='$email' and senha='$senha'") or die("select * from loja where email=$email and senha=$senha");
        $num_rows = mysql_num_rows($query);
        if($num_rows > 0){
            return TRUE;
        } else{
            return FALSE;
        }
        mysql_close();
    }
}