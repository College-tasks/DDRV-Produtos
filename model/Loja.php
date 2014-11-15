<?php

class Loja {

    public $id;
    public $razaoSocial;
    public $telefone;
    public $email;
    public $endereco;
    public $senha;
    public $categoria;
    public $id_categoria;

    public function getId() {
        return $this->id;
    }

    public function getRazaoSocial() {
        return $this->razaoSocial;
    }

    public function setRazaoSocial($razaoSocial) {
        $this->razaoSocial = $razaoSocial;
    }

    public function getTelefone() {
        return $this->telefone;
    }

    public function getIdCategoria() {
        return $this->id_categoria;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function setTelefone($telefone) {
        $this->telefone = $telefone;
    }

    public function getEmail() {
        return $this->email;
    }

    public function setEmail($email) {
        $this->email = $email;
    }

    public function getEndereco() {
        return $this->endereco;
    }

    public function setEndereco($endereco) {
        $this->endereco = $endereco;
    }

    public function getSenha() {
        return $this->senha;
    }

    public function setSenha($senha) {
        $this->senha = $senha;
    }

    public function getCategoria() {
        return $this->categoria;
    }

    public function setCategoria($categoria) {
        $this->categoria = $categoria;
    }

    public function setIdCategoria($id_categoria) {
        $this->id_categoria = $id_categoria;
    }

}

?>
