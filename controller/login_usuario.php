<?php
    require_once "../model/Usuario.class.php";

    $usuario = new Usuario();
    session_start();

    $email = $_POST["email"];
    $password = $_POST["password"];

    if (empty($email) || empty($password)) {
        $_SESSION['mensagem'] = "Preencha todos os campos";
        header("Location: ../form_login.php");
    }

    $params = [
        ":email" => $email,
        ":password" => $password
    ];

    $result = $usuario->logar($params);

    if($result){
        $_SESSION['usuario'] = $result;
        header("Location: ../home.php");
    } else {
        $_SESSION['mensagem'] = "E-mail ou Senha incorretos!";
        header("Location: ../form_login.php");
    }

