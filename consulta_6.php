<?php

session_start();

include "conexao.php";

$desenho = $_POST['nome'];

$result = mysqli_query($conn, "SELECT v.id_dvd FROM desenho as d  INNER JOIN dvd_desenho as v ON d.cod_desenho = v.cod_desenho WHERE d.nome = '$desenho'");

if (empty($result)) 
{
    echo "Nenhum registro encontrado.";
}
while ($row = mysqli_fetch_assoc($result))
{
 echo "<br />";
 echo "ID do dvd:";
 echo $row['id_dvd'];
 echo "<br />";
}
 
?>