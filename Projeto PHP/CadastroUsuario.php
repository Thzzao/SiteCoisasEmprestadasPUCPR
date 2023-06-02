<?php
    //Conexão com o MySQL
    include "includes/conecta.php";

    $id ="";
    $nome = "";
    $telefone = "";
    $email = "";
    $senha = "";

    //Se existir get
    if(isset($_GET['id'])){
    //Abrir valor do get
        $id = $_GET['id'];

        $sql = "SELECT * FROM usuarios WHERE id = $id";
        //Obtem os dados do usuário atual
        $rest =mysqli_query($conn,$sql);
        //Armazena os dados
        $row = mysqli_fetch_assoc($res);

        $id = $row['id'];
        $nome = $row['nome'];
        $telefone = $row['telefone'];
        $email = $row['email'];
        $senha = $row['senha'];
    }

?>

<html>
    <head>    
        <title>Cadastro do usuário - Coisas Emprestadas</title>
        <meta charset = "utf-8" />
        <!--CSS-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link rel="stylesheet" href="estilo.css">

        <body>
            <header>
                <h1>Cadastre-se</h1>
            </header>

            <article>
                <!--Formulário do usuário-->
                <form action = "RecebeUsuario.php" method = "post">

                    <input type="hidden" name="id" value="<?php echo $id; ?>"/>
                
                    <label for="nome">Nome</label>
                    <input type = "text" name = "nome" value="<?php echo $nome; ?>"/>

                    <label for="telefone">Telefone</label>
                    <input type = "tel" name = "telefone" value="<?php echo $telefone; ?>"/>

                    <label for="email">Email</label>
                    <input type = "email" name = "email" value="<?php echo $email; ?>"/>

                    <label for="senha">Senha</label>
                    <input type = "password" name = "senha" value="<?php echo $senha; ?>"/>

                    <!--Botão de enviar-->
                    <p><input class="btn btn-dark" type = "submit" value = "Cadastrar"/> </p>
                </form>
                <!--Botão de cancelar-->
                <a class="button2"  href= "Index.php">Cancelar</a></li><br /><br />

            </article>
        </body>
    </head>
</html>    