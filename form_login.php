<?php include "header.php"; ?>
  <div class="containerPai">
    <div class="containerNavLogin">
      <h1 class="h1NavLogin">Desabafa <strong>Aí</strong></h1>
      <h2 class="h2NavLogin">
        Bem-vindo <br />
        de volta!
      </h2>
      <p class="pNavLogin">Acesse sua conta:</p>
       <?php
            session_start();
            
            if(!isset($_SESSION['usuario'])){

        ?>
            <form action="form_login.php">
            <button class="buttonNavLogin">Entrar</button>
        </form>
        <form action="index.php">
            <button class="buttonNavLogin">Cadastrar</button>
        </form>
        <?php
            } else {
                ?>
                <div class="botoes_lc">
                    <form action="painel.php" method="post">
                        <button type="submit">Perfil</button>
                    </form>

                    <form action="controller/logout_usuario.php" method="post">
                        <button type="submit">Sair</button>
                    </form>
                </div>
        <?php
            }

                //iniciar sessão em php
                        if(isset($_SESSION['mensagem'])){
                            $msg = $_SESSION['mensagem'];
                            echo "<p>" .$msg. "</p>";
                            unset($_SESSION['mensagem']);
                        } 
        ?>
        
      <a class="smallNavLogin" href="#">
        <p>Esqueci minha senha</p>
      </a>
    </div>

    <div class="containerFormularioCadastro">
      <form action="controller/login_usuario.php" method="POST">
        <div class="escrita_form_cadastro">
            <h2 class="h2FormularioCadastro">Conecte-se a sua conta</h2>
            <h3 class="h3FormularioCadastro">Insira seus dados</h3>
        </div>

        <input type="email" id="email" name="email" placeholder="E-mail" />

        <input type="password" id="password" name="password" placeholder="Senha" />

        <button type="submit">Entrar</button>
      </form>
    </div>
  </div>
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