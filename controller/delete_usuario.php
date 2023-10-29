<?php

require_once "../model/Usuario.class.php";

$usuario = new Usuario();
session_start();

$id = $_GET['id'];

if(empty($id)){
    $_SESSION['mensagem'] = "Erro: Id nulo!";
    header("Refresh: 0");
}

$usuario->deleteUsuario($id);
$_SESSION['mensagem'] = "Usuario Deletado!";
header("Location: ../listar_usuario.php");