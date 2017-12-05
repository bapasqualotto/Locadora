<?php

session_start();

include "conexao.php";

$cnpj = $_POST['cnpj'];
$preco = $_POST['preco'];

$result = mysqli_query($conn, "SELECT f.titulo,f.preco_dia FROM filme as f INNER JOIN locadora as l ON l.CNPJ = f.Locadora_CNPJ WHERE f.Locadora_CNPJ='$cnpj' AND f.preco_dia <='$preco'");
if (empty($result)) 
{
    echo "Nenhum registro encontrado.";
}
while ($row = mysqli_fetch_assoc($result))
{
 echo "<br />";
 echo "Nome do filme:";
 echo $row['titulo'];
 echo "<br />";
 echo "Preco:";
 echo $row['preco_dia'];
 echo "<br />";
}
 
?>