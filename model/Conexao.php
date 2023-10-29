<?php

class   Conexao{

    private $db;
    private $dbHost = "tads_2a_manha.mysql.dbaas.com.br";
    private $dbName = "tads_2a_manha";
    private $dbUser = "tads_2a_manha";
    private $dbPass = "UMCtads2023!";

    public function __construct()
    {
        
        try
        {
            $this->db = new PDO("mysql:host=$this->dbHost;dbname=$this->dbName", $this->dbUser, $this->dbPass);
            $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }catch(PDOExepition $e) 
        {
            die("Erro ao conectar ao banco de dados:" .$e->getMessage());
        }
    }//Fim do método construtor



    public function executarQuery($sql, $params = [])
    {
        try 
        {
            $stmt = $this->db->prepare($sql);
            $stmt->execute($params);
            return $stmt;
        }catch(PDOExepition $e)
        {
            die("Erro ao executar a consulta:" .$e->getMessage());
        }
    }

    //funções específicas para o CRUD
    //create
    public function cadastrarRegistro($sql, $dados)
    {
    //    $sql = "INSERT INTO user
       $stmt = $this->db->prepare($sql);
       $stmt->execute($dados);
       return $this->db->lastInsertId();
    }

    //read
    public function listarRegistros($sql)
    {
        // $sql = "SELECT * FROM user";
        $stmt = $this->db->query($sql);
        return $stmt->fetchAll(PDO:: FETCH_ASSOC);
    }    

    //update
    public function editarRegistros($sql, $id, $dados)
    {
        // $sql = "UPDATE user SET titulo = 
        $stmt = $this->db->prepare($sql);
        $dados['id'] = $id;
        return $stmt->execute($dados);
    }

    //delete
    public function excluirRegistro($sql, $id)
    {
        // $sql = "DELETE FROM user WHERE user.id = :id";
        $stmt = $this->db->prepare($sql);
        $stmt->bindValue(':id', $id);
        return $stmt->execute();
    }
} 