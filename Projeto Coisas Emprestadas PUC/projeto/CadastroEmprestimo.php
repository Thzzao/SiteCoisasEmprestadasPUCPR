<html>
    <head>    
        <title>Cadastro Novo Empréstimo - Coisas Emprestadas</title>
        <meta charset = "utf-8" />
        <!--CSS-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link rel="stylesheet" href="estilo.css">

        <body>
            <!--Título-->
            <header>
                <h1> Cadastre um Empréstimo </h1>
            </header>

            <!-- Formulário de emprestimo -->
            <article>
                <form action = "RecebeEmprestimo.php" method = "post">
                    
                    <label for="ItemEmp">Nome do item</label>
                    <input type = "text" name = "ItemEmp" />

                    <label for="nomeDest">Nome do destinatário</label>
                    <input type = "text" name = "nomeDest" />

                    <label for="endereçoDest">Endereço</label>
                    <input type = "text" name = "endereçoDest" />
                    
                    <label for="complementoDest">Complemento</label>
                    <input type = "text" name = "complementoDest" />

                    <label for="cidadeDest">Cidade</label>
                    <input type = "text" name = "cidadeDest" />

                    <label for="cepDest">CEP</label>
                    <input type = "text" name = "cepDest" />

                    <label for="telefoneDest">Telefone</label>
                    <input type = "tel" name = "telefoneDest" />

                    <label for="emailDest">Email</label>
                    <input type = "email" name = "emailDest" /> 

                    <label for="dataDev">Data de Devolução</label>
                    <input type = "date" name = "dataDev" />
                    <!--Botão de cadastro-->
                    <input class="btn btn-dark" type = "submit" value = "Cadastrar"/> 

                </form>
            </article>

        </body>
    </head>
</html>        