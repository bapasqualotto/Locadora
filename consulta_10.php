<?php

session_start();

include "conexao.php";

$titulo = $_POST['titulo'];

$result = mysqli_query($conn, "SELECT l.nome FROM locadora as l INNER JOIN filme as f ON l.CNPJ = f.Locadora_CNPJ WHERE f.titulo = '$titulo'");
if (empty($result)) 
{
    echo "Nenhum registro encontrado.";
}
while ($row = mysqli_fetch_assoc($result))
{
 echo "<br />";
 echo "Nome da Locadora:";
 echo $row['nome'];
 echo "<br />";
}
 
?>