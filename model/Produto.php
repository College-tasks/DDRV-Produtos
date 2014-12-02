<?php

class Produto {

    public $id;
    public $nome;
    public $preco;
    public $descricao;
    public $id_categoria;
    public $id_loja;

    public function getId() {
        return $this->id;
    }

    public function getNome() {
        return $this->nome;
    }

    public function getPreco() {
        return $this->preco;
    }

    public function getDescricao() {
        return $this->descricao;
    }

    public function getIdCategoria() {
        return $this->id_categoria;
    }

    public function getIdLoja() {
        return $this->id_loja;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function setPreco($preco) {
        $this->preco = $preco;
    }

    public function setDescricao($descricao) {
        $this->descricao = $descricao;
    }

    public function setIdCategoria($id_categoria) {
        $this->id_categoria = $id_categoria;
    }

    public function setIdLoja($id_loja) {
        $this->id_loja = $id_loja;
    }

}
