<?php
    //Conexão com o MySQL
    include "includes/conecta.php";

    //Criação das variáveis
    $nome = $_POST["Nome"];
    $telefone = $_POST["Telefone"];
    $email = $_POST["Email"];
    $senha = $_POST["Senha"];
    $id = $_POST["id"];

    //Se a variável estiver vazia, ele insere os dados
    if (empty($id)){

        //Monta o SQL de inserção de dados do formulário MySQL
        $sql = "INSERT INTO usuarios(nome,telefone,email,senha)
                    VALUES
                ('$nome','$telelfone','$email','$senha')";

        //Envia o código SQL para o BD
        $res = mysqli_query($conn, $sql);

        // Se der certo redireciona o usuario para o menu
        if ($res){
            header("Location:PaginaInicial.php");
        }
        else{
            echo "ERRO AO INSERIR DADOS";
        }
    }
    else{
        $sql = "UPDATE usuarios SET
                    nome = '$nome',
                    telefone = '$telefone',
                    email = '$email',
                    senha = '$senha',
                WHERE
                    id=$id ";
        //Envia o código SQL para o BD
        $res = mysqli_query($conn, $sql);

        // Verefico se atualizou
        if ($res){
            header("Location:PaginaInicial.php");
        }
        else{
            echo "ERRO AO INSERIR DADOS";
        }

    }

?>