<?php
    //Conexão com o MySQL
    include "includes/conecta.php";
    
    //Criação das variáveis    
    $email = $_POST["Email"];
    $senha = $_POST["Senha"];
    $id = $_POST["id"];

    //Monta o SQL de inserção de dados do formulário MySQL
    $sql = "INSERT INTO loginlist(email,senha, id)
                VALUES
            ('$email','$senha','$id')";

    //Envia o código SQL para o BD
    $res = mysqli_query($conn, $sql);

    // Se der certo redireciona o usuario para o menu
    if ($res){
        header("Location:PaginaInicial.php");
    }
    else{
        echo "ERRO AO INSERIR DADOS";
    }



?>
