<?php

require_once "Conexao.php";

class Usuario {
    private $db;

    public function __construct() {
        $this->db = new Conexao();
    }


    public function create($params) {
        $sql = "INSERT INTO user_desabafa (username, password, email) 
                VALUES (:username, :password, :email)";
        $stmt = $this->db->executarQuery($sql, $params);
        return $stmt->fetch();
    }

    public function logar($params){
        $sql = "SELECT * FROM user_desabafa WHERE email = :email AND password = :password";
        $stmt = $this->db->executarQuery($sql, $params);
        return $stmt->fetch();
    }

    public function listarUsuario($id) {
        $sql = "SELECT * FROM user_desabafa"; 


        $stmt = $this->db->executarQuery($sql);
        return $stmt->fetchAll();
    }

    public function editarUsuario($params)
    {
        $sql = "UPDATE user_desabafa SET username = :username, password = :password, email = :email 
        WHERE user_desabafa.id= :id";
        $stmt = $this->db->executarQuery($sql, $params);

        return $stmt->fetch();
    }

    public function deleteUsuario($id)
    {
        $sql = "DELETE FROM user_desabafa
        WHERE user_desabafa.id = :id";

        $stmt = $this->db->executarQuery($sql, [':id' => $id]);
        return $id;
    }

    public function getUsuario($id){
        $sql = "SELECT * FROM user_desabafa WHERE id = :id";
        $stmt = $this->db->executarQuery($sql, [':id' => $id]);
        return $stmt->fetch();

    }
}