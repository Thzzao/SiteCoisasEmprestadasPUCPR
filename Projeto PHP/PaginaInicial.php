<html>
    <head>    
        <title>Itens Cadastrados - Coisas Emprestadas</title>
        <meta charset = "utf-8" />
        <!--CSS-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link rel="stylesheet" href="estilo.css">
        
        <body>
            <!--Página inicial--> 
            <header>
                <p><h1>Bem vindo - Coisas Emprestadas</h1><p/> <!--Tentar colocar o nome do usuário logado aqui-->   
            </header>
            <!--Criação do menu-->
            <nav id="Menu">
                <ul class="nav justify-content-center" >
                    <a class="button" href= "CadastroItem.php">Cadastro Item </a>
                    <li><form action="CadastroItem.php" method = "post" /></li>
                    <a class="button" href= "CadastroEmprestimo.php">Cadastro Empréstimo</a></li> 
                    <li><form action="CadastroEmprestimo.php" method = "post" /></li>
                    <a class="button" href= "InserirDevolucao.php">Inserir Devolução</a>       
                    <li><form action="InserirDevolucao.php" method = "post" /></li>  
                    <a class="button" href= "DadosCadastrais.php">Dados Cadastrais</a>     
                    <li><form action="DadosCadastrais.php" method = "post" /></li>
                </ul>
            </nav>   
            
            <!--Criação do escopo da tabela--> 
            <article id="tabela">
                <table>
                    <?php    
                        include "listaItens.php";
                    ?>
                    <thead><h2 class="nav justify-content-center">Tabela dos objetos emprestados</h2></thead></br> 

                </table>
            </article>
            <footer>
                <h6>PUC-PR</h6>
            </footer>
        </body> 
    </head> 
</html>       