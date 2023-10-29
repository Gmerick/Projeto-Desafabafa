
<?php include "header.php"; ?>
  <div class="containerPai">
    <div class="containerNavLogin">
      <br><br><br><br>
      <h1 class="h1NavLogin">Bem-vindo ao seu perfil!</h1>
      <h2 class="h2NavLogin">
        Bem-vindo <br />
        de volta!

            <form action="home.php">
            <button class="buttonNavLogin">Início</button>
        </form>
        <form action="painel.php">
            <button class="buttonNavLogin">Perfil</button>
        </form>
    

    </div>

    <div class="containerPainel">
        <form action="listar_usuario.php">
        <button class="buttonNavPainel" type="submit">Usuários Cadastrados</button>
      </form>

      <form action="index.php">
        <button class="buttonNavPainel" type="submit">Cadastrar Novo Usuário</button>
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