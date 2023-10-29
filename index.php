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
                
                    <form action="painel.php" method="post">
                        <button class="buttonNavLogin">Perfil</button>
                    </form>

                    <form action="controller/logout_usuario.php" method="post">
                        <button class="buttonNavLogin">Sair</button>
                    </form>
                
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
      <form action="controller/create_usuario.php" method="POST">
        <div class="escrita_form_cadastro">
            <h2 class="h2FormularioCadastro">Crie sua conta</h2>
            <h3 class="h3FormularioCadastro">Insira seus dados</h3>
        </div>
        <div class="form-row">
          <input type="text" id="username" name="username" placeholder="Nome" />

          <input type="text" id="sobrenome" name="sobrenome" placeholder="Sobrenome" />
        </div>

        <input type="email" id="email" name="email" placeholder="E-mail" />

        <input type="password" id="password" name="password" placeholder="Senha" />

        <input type="tel" id="celular" name="celular" placeholder="Celular" />

        <div class="form-row">
          <select id="dia" name="dia">
            <option value="">Dia</option>
            <!-- Opções de dias -->
            <?php
            for ($dia = 1; $dia <= 31; $dia++) {
              echo "<option value='$dia'>$dia</option>";
            }
            ?>
          </select>

          <select id="mes" name="mes">
            <option value="">Mês</option>
            <!-- Opções de meses -->
            <?php
            for ($mes = 1; $mes <= 12; $mes++) {
              echo "<option value='$mes'>$mes</option>";
            }
            ?>
          </select>
          <select id="ano" name="ano">
            <option value="">Ano</option>
            <!-- Opções de anos -->
            <?php
            for ($ano = 2023; $ano >= 1900; $ano--) {
              echo "<option value='$ano'>$ano</option>";
            }
            ?>
          </select>

        </div>
        <label>Gênero:</label>
        <div class="form-row conjuntoRadio">
          <label>
            <input type="radio" name="genero" value="feminino" />
            Feminino
          </label>
          <label>
            <input type="radio" name="genero" value="masculino" />
            Masculino
          </label>
          <label>
            <input type="radio" name="genero" value="nao-binario" />
            Não Binário
          </label>
        </div>

        <label>Tipo de usuário:</label>
        <div class="form-row conjuntoRadio">
          <label>
            <input type="radio" name="tipoUsuario" value="comum" />
            Comum
          </label>
          <label>
            <input type="radio" name="tipoUsuario" data-tipo="Psicologo" value="psicologo" />
            Psicólogo
          </label>
            </select>
            <span id="InputsDocumento">
                <input class="form-control" type="hidden" name="CRP" id="Psicologo" placeholder="Digite seu CRP" disabled>
        </div>
      </span>
        <button type="submit">Cadastrar</button>
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