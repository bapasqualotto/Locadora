<?php

session_start();

include "conexao.php";

$cnpj = $_POST['cnpj'];

$result = mysqli_query($conn, "SELECT c.nome,c.idCliente FROM cliente as c INNER JOIN locadora as l ON l.CNPJ = c.Locadora_CNPJ WHERE c.Locadora_CNPJ='$cnpj' ORDER BY c.nome ASC");
if (empty($result)) 
{
    echo "Nenhum registro encontrado.";
}
while ($row = mysqli_fetch_assoc($result))
{
 echo "<br />";
 echo "Nome do Cliente:";
 echo $row['nome'];
 echo "<br />";
 echo "ID do Cliente:";
 echo $row['idCliente'];
 echo "<br />";
}
 
?>