<?php
$conn = mysqli_connect("localhost:3307", "root", "", "projetoweb");
    if ($conn == false){
        die("ERRO: Não conseguiu conectar ao MySQL. ". mysqli_connect_error());
    }
?>    
