<?php

session_start();

include "conexao.php";

$cliente = $_POST['cliente'];

$result = mysqli_query($conn, "SELECT f.nome FROM funcionario as f INNER JOIN aluguel as a INNER JOIN cliente as c  ON f.idFunc = a.funcionario_idFunc WHERE c.idCliente = a.Cliente_idCliente AND c.nome = '$cliente'");

if (empty($result)) 
{
    echo "Nenhum registro encontrado.";
}
while ($row = mysqli_fetch_assoc($result))
{
 echo "<br />";
 echo "Nome do funcionario:";
 echo $row['nome'];
 echo "<br />";
}
 
?>