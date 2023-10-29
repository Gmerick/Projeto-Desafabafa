<?php

include "header.php";

    require_once "./model/Usuario.class.php";
    $usuario = new Usuario();

    session_start();
    if(empty($_GET["id"])){
        $_SESSION['mensagem'] = "Erro: Id nulo!";
        header("Location: listar_usuario.php");
    } 

    $id = $_GET["id"];
    $u = $usuario->getUsuario($id);
?>
    <div class="containerFormularioUpdate">
        <div class="background_registro">
            <div class="titulo_registro">
                <h1 class="h2FormularioUpdate">Atualize o Usuário</h1><br>
            </div>
            <div class="campos_registro">
                <form id="atualizar_usuario" method="post" action = "./controller/atualizar_usuario.php?id=<?=$id?>">
                        
                <label for="username">Usuário</label>
                <input value="<?= ($u["username"])?>"  name="username" id="username" required><br><br>

                <label for="password">Senha</label><br>
                <input value="<?= ($u["password"])?>"  name="password" id="password" required><br><br>
                            
                <label for="email">E-mail</label><br>
                <input value="<?= ($u["email"])?>"  name="email" id="email" required><br><br>
                
                <a href="listar_usuario.php">
                <button class="bt_registrar" type="submit">Atualizar</button></a>
                            
                </form>
            </div>
        </div>
        </div>
  </div>