<?php

$conn = new PDO("pgsql:dbname=banco_tarefa host=localhost", "leonardo", "vidanova");

class Pessoa {

    private $db;
    private $id;
    private $nome;
    private $email;
    private $login;
    private $senha;
    private $editar;
    private $excluir;
    private $incluir;

    public function __construct(PDO $conn) {
        $this->db = $conn;
    }

    public function getNome() {
        return $this->nome;
    }

    public function getEmail() {
        return $this->email;
    }

    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function setEmail($email) {
        $this->email = $email;
    }

    public function getLogin() {
        return $this->login;
    }

    public function getSenha() {
        return $this->senha;
    }

    public function setLogin($login) {
        $this->login = $login;
    }

    public function setSenha($senha) {
        $this->senha = $senha;
    }

    public function getEditar() {
        return $this->editar;
    }

    public function getExcluir() {
        return $this->excluir;
    }

    public function getIncluir() {
        return $this->incluir;
    }

    public function setEditar($editar) {
        $this->editar = $editar;
    }

    public function setExcluir($excluir) {
        $this->excluir = $excluir;
    }

    public function setIncluir($incluir) {
        $this->incluir = $incluir;
    }

    public function insert() {
        $stmt = $this->db->prepare("INSERT INTO usuarios(nome_usuario, email_usuario, login_usuario, senha_usuario, editar, excluir, incluir) VALUES(:nome, :email, :login, :senha, :editar, :excluir, :incluir)");
        $stmt->bindParam(":nome", $this->nome);
        $stmt->bindParam(":email", $this->email);
        $stmt->bindParam(":login", $this->login);
        $stmt->bindParam(":senha", $this->senha);
        $stmt->bindParam(":editar", $this->editar);
        $stmt->bindParam(":excluir", $this->excluir);
        $stmt->bindParam(":incluir", $this->incluir);
        $stmt->execute();
    }

    public function update($id) {
        $stmt = $this->db->prepare("UPDATE pessoas SET nome=:nome, email=:email WHERE id=$id");
        $stmt->bindParam(":nome", $this->nome);
        $stmt->bindParam(":email", $this->email);
        $stmt->execute();
    }

    public function delete($id) {
        $stmt = $this->db->prepare("DELETE FROM pessoas WHERE id=$id");
        $stmt->execute();
    }

    public function listar() {
        $stmt = $this->db->prepare("SELECT * FROM pessoas ORDER BY id");
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_OBJ);
    }

}
