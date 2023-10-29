<?php
include "header.php";

require_once "./model/Usuario.class.php";
$usuario = new Usuario();


if(empty($_GET["id"])){
    $_SESSION['mensagem'] = "Erro: Id nulo!";
    header("Location: listar_usuario.php");
} 

$id = $_GET["id"];
$r = $usuario->getUsuario($id);
?>

    <div class="visu_usuario">
        <p><?= $r['id'] ?></p><br><br>
        <p><?= $r['username'] ?></p><br><br>
        <p><?= $r['email'] ?></p>
    </div>