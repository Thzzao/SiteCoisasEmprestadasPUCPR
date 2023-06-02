<html>
    <head>     
        <title>Cadastro do usuário - Coisas Emprestadas</title>
        <meta charset = "utf-8" />
        <!--CSS-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link rel="stylesheet" href="estilo.css">

        <body>
            <header>
                <h1></h1>
            </header>

            <!--Chamada da tabela --> 
            <article id="tabela">
                <table>
                    <thead><h2 class="nav justify-content-center">Tabela dos objetos emprestados</h2></thead></br >
                    <tbody>
                        <!--Escoupo da tabela-->
                        <tr>
                            <th>Item</th>
                            <th>Data de Empréstimo</th>
                            <th>Previsão de Devolução</th>
                            <th>Quem Emprestou</th>
                            <th>Situação</th>
                        </tr>
                        </tbody>          
                        <!--Chamada do php-->
                        <?php
                            //Conexão com o MySQL
                            include "includes/conecta.php";
                            //Criação das variáveis
                            $nomeObjeto = $_POST["Item"];
                            $dataEmp = $_POST["Data de Empréstimo"];
                            $previsao = $_POST ["Previsão de Devolução"];
                            $nomeDonoEmp = $_POST["Quem Emprestou"];
                            $situacao = $_POST["Situação"];
                            $id = $_POST["id"];

                            //Monta o SQL de inserção de dados do formulário MySQL
                            $sql = "INSERT INTO itens(Item, Data de Empréstimo,Previsão de Devolução,Quem Emprestou,Situação, id); 
                                        VALUES
                                    ('$nomeObjeto','$dataEmp','$previsao','$nomeDonoEmp','$situacao','$id')";
                            //Monta o comando para obter todos os itens da lista
                            $sql = "SELECT Item, Data de Empréstimo,Previsão de Devolução,Quem Emprestou,Situação FROM itens";
                            
                            //Envia o código SQL para o BD
                            $res = mysqli_query($cnn, $sql);
                        
                            //Percorre os registros encontrados 
                            while($row = mysqli_fetch_assoc($res)){
                                echo "<tr> 
                                    <td>". $row['Item']."</td>
                                    <td>". $row['Data de Empréstimo']."</td>
                                    <td>". $row['Previsão de Devolução']."</td>
                                    <td>". $row['Quem emprestou']."</td>
                                    <td>". $row['Situação']."</td>
                                </tr>";
                            }    
                        ?>
                </table>
                <!--Botão voltar-->
                <a class="button2"  href= "Index.php">Voltar</a></li><br /><br />

            </article>
        </body>
    </head>
</html>    