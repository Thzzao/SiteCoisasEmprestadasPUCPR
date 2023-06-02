<?php
    //Conexão com o MySQL
    include "includes/conecta.php";

    //Criação das variáveis
    $ItemEmp = $_POST["Nome do Item:"];
    $nomeDest = $_POST["Nome do destinatário:"];
    $endereçoDest = $_POST["Endereço:"];
    $complementoDest = $_POST["Complemento:"];
    $cidadeDest = $_POST["Cidade:"];
    $cepDest = $_POST["CEP:"];
    $telefoneDest = $_POST["Telefone:"];
    $emailDest = $_POST["Email:"];
    $dataDev = $_POST["Data de devolução:"];
    $id = $_POST["id"];


    //Monta o SQL de inserção de dados do formulário MySQL
    $sql = "INSERT INTO itensemp(Nome do Item,Nome do destinatário,Endereço,Complemento,Cidade,CEP,Telefone,Email,Data de devolução, id); 
                VALUES
            ('$ItemEmp','$nomeDest','$endereçoDest','$complementoDest','$cidadeDest','$cepDest','$telefoneDest', 
            '$emailDest', '$dataDev', '$id')";

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
