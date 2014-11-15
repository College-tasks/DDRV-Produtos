<?php

class Image_Produto {

    public $id;
    public $image;
    public $principal;
    public $id_produto;

    public function getID() {
        return $this->id;
    }

    public function getImage() {
        return $this->image;
    }

    public function getPrincipal() {
        return $this->principal;
    }

    public function getIdProduto() {
        return $this->id_produto;
    }

    public function setID($id) {
        $this->id = $id;
    }

    public function setImage($image) {
        $this->image = $image;
    }

    public function setPrincipal($principal) {
        $this->principal = $principal;
    }

    public function setIdProduto($id_produto) {
        $this->id_produto = $id_produto;
    }
}
