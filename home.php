<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/styles.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-..." crossorigin="anonymous" />
    <title>Document</title>
</head>

<body>
    <div class="containerPai">
        <div class="containerNavHome">
            <div>
                <br><br><br><br>
                <img class="logo" src="img/heartlogo.png" />
                <div class="homeRow">
                    <a class="pNavHome" href="#"><i class="fas fa-home"></i>
                        <p>Início</p>
                    </a>
                </div>
                <div class="homeRow">
                    <a class="pNavHome" href="#"><i class="fas fa-envelope"></i>
                        <p>Minhas Postagens</p>
                    </a>
                </div>
                <div class="homeRow">
                    <a class="pNavHome" href="painel.php"><i class="fas fa-user"></i>
                        <p>Meu Perfil</p>
                    </a>
                </div>
                <div class="homeRow">
                    <a class="pNavHome" href="#"><i class="fas fa-comment"></i>
                        <p>Mensagens</p>
                    </a>
                </div>
                <div class="homeRow">
                    <a class="pNavHome" href="#"><i class="fas fa-bell"></i>
                        <p>Notificações</p>
                    </a>
                </div>
                <div class="homeRow">
                    <a class="pNavHome" href="#"><i class="fas fa-user-check"></i>
                        <p>Seguindo</p>
                    </a>
                </div>
                <div class="homeRow">
                    <a class="pNavHome" href="#"><i class="fas fa-lightbulb"></i>
                        <p>Oportunidades</p>
                    </a>
                </div>
                <div class="homeRow">
                    <a class="pNavHome" href="#"><i class="fas fa-book"></i>
                        <p>Conteúdo</p>
                    </a>
                </div>
            </div>
            <button class="buttonNavHome">Publicar</button>
        </div>

        <div class="containerContent">
            <h1 class="h1Content">Inicio</h1>
            <hr>
            <div class="postagem">
                <div class="postagemUsuario">
                    <img src="img/placeholder.webp" alt="Foto do usuário" class="fotoUsuario">
                    <p class="nomeUsuario">Nome do Usuário</p>
                </div>
                <textarea class="campoPostagem" placeholder="Digite sua postagem"></textarea>
                <div class="row">
                    <div>
                        <button class="botaoCurtir sizeUp"><i class="fas fa-image"></i></button>
                        <button class="botaoCurtir sizeUp"><i class="fas fa-camera"></i></button>
                    </div>
                    <button class="botaoPostar">Postar</button>
                </div>
            </div>
            <hr>
            <div class="feed">
                <!-- Aqui você pode adicionar as postagens do feed -->
                <div class="postagemFeed">
                    <div class="postagemUsuario">
                        <img src="img/placeholder.webp" alt="Foto do usuário" class="fotoUsuario">
                        <p class="nomeUsuario">Nome do Usuário</p>
                    </div>
                    <p class="conteudoPostagem">Conteúdo da postagem</p>
                    <div class="acoesPostagem">
                        <button class="botaoCurtir"><i class="fas fa-heart"></i> Curtir</button>
                        <button class="botaoComentar"><i class="fas fa-comment"></i> Comentar</button>
                        <button class="botaoCompartilhar"><i class="fas fa-share"></i> Compartilhar</button>
                    </div>
                </div>

                <!-- Adicione mais postagens aqui -->
            </div>
        </div>

        <div class="containerForum">
            <div class="search-bar">
                <input type="text" placeholder="Pesquisar">
                <button type="submit">Buscar</button>
            </div>
            <div class="containerForumFundo">
                <div class="containerItensForum">
                    <h2 class="h2Forum">Fórum</h2>
                </div>
                <hr>
                <div class="containerItensForum">
                    <h3 class="h3Forum">Em alta</h3>
                    <p class="pForum">1 - O que realmente é preconceito?</p>
                    <small class="smallForum">10 Comentários</small>
                </div>
                <hr>
                <div class="containerItensForum">
                    <p class="pForum">2 - Assunto</p>
                    <small class="smallForum">6 Comentários</small>
                </div>
                <hr>
                <div class="containerItensForum">
                    <p class="pForum">3 - Assunto 2</p>
                    <small class="smallForum">4 Comentários</small>
                </div>
                <hr>
                <div class="containerItensForum">
                    <h3 class="h3Forum">Recentes</h3>
                    <p class="pForum">1 - Como começar os hormônios?</p>
                    <small class="smallForum">1 Comentários</small>
                </div>
                <hr>
                <div class="containerItensForum">
                    <p class="pForum">2 - Inclusão Social</p>
                    <small class="smallForum">4 Comentários</small>
                </div>
                <hr>
                <div class="containerItensForum">
                    <p class="pForum">3 - Assumindo Sexualidade pelo Jeito de se Vestir</p>
                    <small class="smallForum">4 Comentários</small>
                </div>
                <div class="mostrarMais"><a>Mostrar Mais</a></div>
            </div>
        </div>
    </div>

</body>

</html>