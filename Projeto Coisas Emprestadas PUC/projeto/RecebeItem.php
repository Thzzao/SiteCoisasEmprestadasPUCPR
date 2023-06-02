<?php
    //Conexão com o MySQL
    include "includes/conecta.php";

    //Criação das variáveis
    $nomeObjeto = $_POST["Nome do objeto"];
    $nomeDono = $_POST["Nome do dono"];
    $endereçoDono = $_POST["Endereço do dono"];
    $telefoneDono = $_POST["Telefone do dono"];
    $emailDono = $_POST["Email do dono"];
    $id = $_POST["id"];
    

    //Monta o SQL de inserção de dados do formulário MySQL
    $sql = "INSERT INTO itenscadastrados(Nome do objeto,Nome do dono,Endereço do dono,Telefone do dono,Email do dono,id); 
                VALUES
            ('$nomeObjeto','$danomeDonotaEmp','$endereçoDono','$telefoneDono','$emailDono','$id')";

    //Envia o código SQL para o BD
    $res = mysqli_query($conn, $sql);

    // Se der certo redireciona o usuario para a listagem
    if ($res){
        header("Location:listaItens.php");
    }
    else{
        echo "ERRO AO INSERIR DADOS";
    }


?>