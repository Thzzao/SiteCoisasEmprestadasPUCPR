<html>
    <head>    
        <title>Dados do usuário - Coisas Emprestadas</title>
        <meta charset = "utf-8" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link rel="stylesheet" href="estilo.css">

        <body>
            <header>
                <h1>Seus dados</h1>
            </header>

            <nav
                <h3>Caso queira alterar seus dados, atualize e aperte para salvar</h3>
            </nav>

            <article>
                <!--Formulário dos dados cadastrados-->
                <form action = "RecebeDadosCadastrais.php" method = "post">
                    <label for="nome">Nome</label>
                    <input type = "text" name = "nome" />

                    <label for="telefone">Telefone</label>
                    <input type = "tel" name = "telefone" />
                    
                    <label for="email">Email</label>
                    <input type = "email" name = "email" />

                    <label for="senha">Senha</label>
                    <input type = "password" name = "senha" />
                    <!--Botão de enviar os dados-->
                    <p><input class="btn btn-dark" type = "submit" value = "Salvar Novos Dados"/> </p>
                </form>

                <!--Botão para cancelar-->
                <a class="button2" href= "PaginaInicial.php">Cancelar</a></li><br /><br />

            </article>
        </body>
    </head>
</html>
        