<?php

require_once "../model/Usuario.class.php";

$usuario = new Usuario();
session_start();

$username = $_POST['username'];
$password = $_POST['password'];
$email = $_POST['email'];

if(empty($username) || empty($password) || empty($email) ){
    $_SESSION['mensagem'] = "Preencha todos os campos";
    header("Location: ../index.php");
}


$params = [
    ":username" => $username, 
    ":password" => $password, 
    ":email" => $email,
];

$result = $usuario->create($params);
$_SESSION['mensagem'] = "Usuário criado";
header("Location: ../index.php");
