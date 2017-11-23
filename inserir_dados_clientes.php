<?php
   
   session_start();

	include "conexao.php";  
    
    $nome = $_POST["nome"]; 
    $telefone = $_POST["telefone"];
    $endereco = $_POST["endereco"];
     
    $string_sql = "INSERT INTO cliente(nome,telefone,endereco) VALUES ('$nome','$telefone','$endereco')"; //String com consulta SQL da inserção
    echo "Cliente inserido com sucesso";

    mysqli_query($conn,$string_sql); //Realiza a consulta

?>