<?php

session_start();

include "conexao.php";

$genero = $_POST['genero'];

$result = mysqli_query($conn, "SELECT f.titulo,d.id_dvd FROM filme as f  INNER JOIN dvd_filme as d ON f.cod_filme = d.cod_filme WHERE f.genero = '$genero'");

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
 echo "ID do dvd:";
 echo $row['id_dvd'];
 echo "<br />";
}
 
?>