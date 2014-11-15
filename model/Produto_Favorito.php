<?php

class Produto_Favorito {
    public $id_produto;
    public $id_usuario;
    
    public function setIdProduto($id_produto) {
        $this->id_produto = $id_produto;
    }
    
    public function getIdProduto() {
        return $this->id_produto;
    }
    
    public function setIdUsuario($id_usuario) {
        $this->id_usuario = $id_usuario;
    }
    
    public function getIdUsuario(){
        return $this->id_usuario;
    }
}
