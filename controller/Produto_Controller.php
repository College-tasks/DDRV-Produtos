<?php
require './Conecta.php';
class Produto_Controller {
    public function inserir($produto) {
        $db = new Conecta();
        $db->conecta_db() or die("Falha ao conectar a base de dados");
        mysql_query("insert into produto(Nome, Preco, Descricao, Id_Categoria, Id_Loja)"
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
    public function listarProdutos($idLoja='') {
        $db = new Conecta();
        $db->conecta_db() or die("Falha ao conectar a base de dados");
        
        if($idLoja=='')
            {
                $query = mysql_query("select * from produto") or die("Falha ao retornar usuarios");    
            }
            else
            {
                $query = mysql_query("select * from produto where Id_Loja = " . $idLoja) or die("Falha ao retornar usuarios");                    
            }    
        
        $arr = Array();
        while ($list = mysql_fetch_array($query)) {
                   
            $produto = new Produto();
            $produto->setDescricao($list['Descricao']);
            $produto->setId($list['Id']);
            $produto->setIdCategoria($list['Id_Categoria']);
            $produto->setIdLoja($list['Id_Loja']);
            $produto->setNome($list['Nome']);
            $produto->setPreco($list['Preco']);
                        
            $arr[] = $produto;
        }
        mysql_close();
        return $arr;
    }
    public function listarUltimos() {
        $db = new Conecta();
        $db->conecta_db() or die("Falha ao conectar a base de dados");
        $query = mysql_query("select * from produto order by id desc limit 3") or die("Falha ao retornar usuarios");
        $arr = Array();
        while ($list = mysql_fetch_array($query)) {
            $produto = new Produto();
            $produto->setDescricao($list['descricao']);
            $produto->setId($list['id']);
            $produto->setIdCategoria($list['id_categoria']);
            $produto->setIdLoja($list['id_loja']);
            $produto->setNome($list['nome']);
            $produto->setPreco($list['preco']);
            $arr[] = $produto;
        }
        mysql_close();
        return $arr;
    }
    public function listarCategoria($id_categoria) {
        $db = new Conecta();
        $db->conecta_db() or die("Falha ao conectar a base de dados");
        $query = mysql_query("select * from produto where id_categoria = '$id_categoria'") or die("Falha ao retornar usuarios");
        $arr = Array();
        while ($list = mysql_fetch_array($query)) {
            $produto = new Produto();
            $produto->setDescricao($list['descricao']);
            $produto->setId($list['id']);
            $produto->setIdCategoria($list['id_categoria']);
            $produto->setIdLoja($list['id_loja']);
            $produto->setNome($list['nome']);
            $produto->setPreco($list['preco']);
            $arr[] = $produto;
        }
        mysql_close();
        return $arr;
    }
    public function listarNome($nome) {
        $db = new Conecta();
        $db->conecta_db() or die("Falha ao conectar a base de dados");
        $query = mysql_query("select * from produto where nome like '%'$nome'%'") or die("Falha ao retornar usuarios");
        $arr = Array();
        while ($list = mysql_fetch_array($query)) {
            $produto = new Produto();
            $produto->setDescricao($list['descricao']);
            $produto->setId($list['id']);
            $produto->setIdCategoria($list['id_categoria']);
            $produto->setIdLoja($list['id_loja']);
            $produto->setNome($list['nome']);
            $produto->setPreco($list['preco']);
            $arr[] = $produto;
        }
        mysql_close();
        return $arr;
    }
    public function selectByID($id) {
        $db = new Conecta();
        $db->conecta_db() or die("Falha ao conectar a base de dados");
        $query = mysql_query("select * from produto where id = '$id'") or die("Falha ao retornar usuarios");
        $arr = Array();
        while ($list = mysql_fetch_array($query)) {       
            
            $produto = new Produto();
            $produto->setDescricao($list['Descricao']);
            $produto->setId($list['Id']);
            $produto->setIdCategoria($list['Id_categoria']);
            $produto->setIdLoja($list['Id_loja']);
            $produto->setNome($list['Nome']);
            $produto->setPreco($list['Preco']);
            $arr = $produto;

        }
        mysql_close();
        return $arr;
    }
}