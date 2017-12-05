<?php

session_start();

include "conexao.php";

$cnpj = $_POST['cnpj'];

$result = mysqli_query($conn, "SELECT titulo,cod_filme FROM filme INNER JOIN locadora ON CNPJ = Locadora_CNPJ WHERE Locadora_CNPJ='$cnpj'  ORDER BY titulo ASC");
if (empty($result)) 
{
    echo "Nenhum registro encontrado.";
}
while ($row = mysqli_fetch_assoc($result))
{
 echo "<br />";
 echo "Titulo do filme:";
 echo $row['titulo'];
 echo "<br />";
 echo "Codigo:";
 echo $row['cod_filme'];
 echo "<br />";
}
 
?>