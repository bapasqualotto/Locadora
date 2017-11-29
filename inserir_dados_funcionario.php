<?php
   
   session_start();

	include "conexao.php";  
    
    $nome = $_POST["nome"]; 
    $salario= $_POST["salario"];
    $telefone = $_POST["telefone"];
    $Locadora_CNPJ = $_POST["cnpj"];

     
    $string_sql = "INSERT INTO funcionario(Nome,Sal,Telefone,Locadora_CNPJ) VALUES ('$nome',$salario,'$telefone','$Locadora_CNPJ')"; //String com consulta SQL da inserção
 
    echo $string_sql;
    mysqli_query($conn,$string_sql); //Realiza a consulta
    echo "Funcionario inserido com sucesso";

?>