<?php

require_once "../model/Usuario.class.php";

$usuario = new Usuario();
$id = $_GET['id'];

$username = $_POST['username'];
$password = $_POST['password'];
$email = $_POST['email'];

if(empty($username) || empty($password) || empty($email)){
    $_SESSION['mensagem'] = "Preencha todos os campos";
    header("Refresh: 0");
}

$params = [
    ":id" => $id,
    ":username" => $username, 
    ":password" => $password,
    ":email" => $email,
];

$usuario->editarUsuario($params);
$_SESSION['mensagem'] = "Cadastro alterado!";
header("Location: ../listar_usuario.php");
