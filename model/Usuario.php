<?php

class Usuario {

    public $id;
    public $nome;
    public $senha;
    public $email;
    public $nascimento;
    public $sexo;

    public function getID() {
        return $this->id;
    }

    public function getNome() {
        return $this->nome;
    }

    public function getSenha() {
        return $this->senha;
    }

    public function getEmail() {
        return $this->email;
    }

    public function getNascimento() {
        return $this->nascimento;
    }

    public function getSexo() {
        return $this->sexo;
    }

    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function setID($id) {
        $this->id = $id;
    }

    public function setSenha($senha) {
        $this->senha = $senha;
    }

    public function setEmail($email) {
        $this->email = $email;
    }

    public function setNascimento($nascimento) {
        $this->nascimento = $nascimento;
    }

    public function setSexo($sexo) {
        $this->sexo = $sexo;
    }

}
