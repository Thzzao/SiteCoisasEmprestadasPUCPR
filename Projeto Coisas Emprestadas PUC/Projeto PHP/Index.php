<!DOCTYPE html>
<html>
    <head>    
        <title>Coisas Emprestadas - Login</title>
        <meta charset = "utf-8" />
        <!--Descrição do site-->
        <meta name= "description" content= "Projeto Universitário da matéria de Programação Web do curso de Análise e Desenvolvimento de Sistemas PUCPR" />
        <meta name= "keywords" content= "html, projeto, pucpr, web, programação"/>
        <meta name= "author" content= "Thiago Josinaldo dos Santos Souza"/>
        <!--Boodstrap-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <!--Estilização com a pasta .css-->
        <link rel="stylesheet" href="estilo.css">

        <!--Estilização única da página de login-->
        <style>
            body{
                font-family: Arial, Helvetica, sans-serif;
                background-image: linear-gradient(45deg, cyan, yellow);
            }
            div{
                background-color: rgba(0, 0, 0, 0.9);
                position: absolute;
                top: 50%;
                left: 50%;
                transform: translate(-50%,-50%);
                padding: 80px;
                border-radius: 15px;
                color: #fff;
            }
            input{
                padding: 15px;
                border: none;
                outline: none;
                font-size: 15px;
            }
            button{
                background-color: dodgerblue;
                border: none;
                padding: 15px;
                width: 100%;
                border-radius: 10px;
                color: white;
                font-size: 15px;
                
            }
            button:hover{
                background-color: deepskyblue;
                cursor: pointer;
            }
        </style>

        <body>
             
            <div>
                <!--Formulário de login -->
                <form action="RecebeLogin.php" method = "post">
                    <h1 class="destaque">Login</h1></br>

                    <input type = "email" name = "email" placeholder="Email"/>
                        </br></br>
                    <input type = "password" name = "senha" placeholder="Senha"/>
                        </br></br>
                    <input class="btn btn-dark" type = "submit" value = "Entrar">

                </form>
                <!--Link para cadastrar um usuário novo-->
                <form action="CadastroUsuario.php" method ="post">
                    <p class="btn btn-link"> <a href= "CadastroUsuario.php">Cadastrar novo usuário</a></p>
                </form>
            </div>
            
            <?php   
                $login = $_POST ["login"];
                $senha = $_POST ["senha"];
                
                include "includes/conecta.php";

                $sql = "SELCET * FROM usuarios WHERE email = '$login' AND senha = '$senha'";
                $res = mysqli_query($cnn,$sql);
                $qtdeRegistros = mysqli_num_rows($res);

                if ($qtdeRegistros . 0){
                    header ("location:PaginaInicial.php");
                }
                else{
                    header("location: index.php");
                }
    
            ?>    
        </body>    
    </head>        
</html>
