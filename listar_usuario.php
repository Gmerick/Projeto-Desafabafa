    <?php
         include "header.php";
    ?>
    
    <?php


    require_once "./model/Usuario.class.php";
    $usuario = new Usuario();

    session_start();
    if($_SESSION['usuario'] == null){
        $_SESSION['mensagem'] = "Conecte-se em uma conta para visualizar informações";
        header("Location: index.php");
    }

    $params = [
        ":id" => $_SESSION['usuario']['id'],
    ];

    $usuarios = $usuario->listarUsuario($params);
    ?>

  <div class="containerPai">
    <div class="containerNavLogin">
      <h1 class="h1NavLogin">Informações do Usuário</h1>

            <form action="home.php">
            <button class="buttonNavLogin">Início</button>
        </form>
        <form action="painel.php">
            <button class="buttonNavLogin">Perfil</button>
        </form>
    

    </div>

    <div class="containerUsuario">
    <div class="background_msg_perfil">
    <div class="msg_perfil">
        <h1>Informações de Usuário</h1>
    </div>
</div>

<div class="background_perfil">
    <?php 
        foreach($usuarios as $usuario) {
    ?>
        <div class="listar">
            <div class="lista_nome">
                <?=$usuario['username']?>
            </div>
            <div class="bt_up_del">
                <a href="exibir_usuario.php?id=<?= $usuario['id'] ?>"><img src="img/olho.png" alt="Visualizar?"></a>
                <a href="update_usuarios.php?id=<?= $usuario['id'] ?>"><img src="img/atualizar.png" alt="Update"></a>
                <a href="controller/delete_usuario.php?id=<?= $usuario['id'] ?>"><img src="img/remover-usuario.png" alt="Excluir"></a>
            </div>
        </div>

        <?php
        }

        ?>
  <script>
    // Obtém todos os elementos de input do tipo "radio" dentro do containerFormularioCadastro
    const radios = document.querySelectorAll('.containerFormularioCadastro input[type="radio"]');

    // Adiciona um evento de clique a cada elemento de input do tipo "radio"
    radios.forEach((radio) => {
      radio.addEventListener('click', () => {
        // Obtém o rótulo (label) associado ao input atual
        const label = radio.parentNode;

        // Verifica se o input está marcado
        if (radio.checked) {
          // Aplica a cor preta ao texto do rótulo
          label.style.color = 'black';
        } else {
          // Caso contrário, retorna à cor original
          label.style.color = '#808080';
        }
      });
    });
  </script>

</body>

</html>