<?php
    //Conexão com o MySQL
    include "includes/conecta.php";

    //Criação das variáveis//
    $nome = $_POST["Nome"];
    $telefone = $_POST["Telefone"];
    $email = $_POST["Email"];
    $senha = $_POST["Senha"];
    $id = $_POST["id"];

    //Monta o SQL de inserção de dados do formulário MySQL
    $sql = "INSERT INTO dadoscadastro(Nome,Telefone, Email, Senha,id); 
                VALUES
            ('$nome','$telefone','$email','$senha','$id')";

    //Monta o comando para obter todos os itens da lista
    $sql = "SELECT (Nome,Telefone, Email, Senha, id FROM dadoscadastro";

    //Envia o código SQL para o BD
    $res = mysqli_query($conn, $sql);

     //Percorre os registros encontrados 
     while($row = mysqli_fetch_assoc($res)){
        echo "<tr> 
            <td>". $row['Nome']."</td>
            <td>". $row['Telefone']."</td>
            <td>". $row['Email']."</td>
            <td>". $row['Senha']."</td>
            <td>". $row['id']."</td>
            <td><a href='CadastroUsuario.php?id=". $row['id']."'>Editar</a></td>
            <td><a href='CadastroUsuario.php?id=". $row['Nome']."'>Editar</a></td>
            
        </tr>";}

    // Se der certo redireciona o usuario para o menu
    if ($res){
        header("Location: PaginaInicial.php");
    }
    else{
        echo "ERRO AO INSERIR DADOS";
    }

?>