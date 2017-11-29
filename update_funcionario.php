<?php
   
   session_start();

	include "conexao.php";  
    
    $id_funcionario = $_POST["id"];
    $nome = $_POST["nome"]; 
    $salario= $_POST["salario"];
    $telefone = $_POST["telefone"];
    $Locadora_CNPJ = $_POST["cnpj"];

     
    $string_sql = "UPDATE funcionario SET Nome='$nome',Sal=".$salario.",Telefone=".$telefone.", Locadora_CNPJ=".$Locadora_CNPJ." WHERE idFunc=".$id_funcionario."";
    			 //String com consulta SQL da inserção
    mysqli_query($conn,$string_sql); //Realiza a consulta

    echo "Funcionario Atualizado com sucesso";
    echo  $string_sql;

?>